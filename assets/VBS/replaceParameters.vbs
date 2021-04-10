WScript.Echo "replaceParameters.vbs 2021/04/7"
'REPLACE PARAMETERS .vbs 06/04/21
'replaces the existing values in the myPineappleParams array with the x &  y values for the current run of the software
'#####################################################################
'INPUTS
'myBaseDir should be the directory that holds the relevant project files
' myBaseDir = projectFiles        'projectFiles = current project directory from inputs given by the software
myBaseDir = "."     'current directory used for testing
If Right(myBaseDir, 1) <> "\" Then        'path needs a trailing \
    myBaseDir = myBaseDir + "\"
End If

'#####################################################################
'SCRIPT:
'set up objects
Set fso = CreateObject("Scripting.FileSystemObject")
Set myOrig = fso.GetFolder(myBaseDir)

'initialise variables
x = Split("a,b,c,d,e,f,g,h,i,j",",")      'for testing purposes
y = Split("1,2,3,4,5,6,7,8,9,10",",")        'these arrays would not be in the version used by the software

xString = CStr(Join(x,","))      'x and y are vectors from inputs given by the software
yString = CStr(Join(y,","))
xArray = Split(xString,",")      'the vectors need to be reformatted into arrays for the script to cycle through the values
yArray = Split(yString,",")

variableParameters = ""     'updated in Do Until loop as it needs to be updated as the script goes through the x and y arrays

For Each file In myOrig.Files
    fileName = file.Name
    fileTemp = fileName + ".temp"       'script writes to a temporary file to avoid errors
    If InStr(fileName, "rPTest") And LCase(fso.GetExtensionName(file.Name)) = "js" Then       'avoid processing unnecessary files
        WScript.Echo "Processing file: " + file.Name
        
        'set up objects
        Set myReplacementFile = fso.CreateTextFile(fileTemp)
        Set myOriginalFile = fso.GetFile(file)
        Set textStream = myOriginalFile.OpenAsTextStream(1)     '1 for reading

        'initialise variables
        Dim arrayInFile
        Dim counter
        Dim arrayLine
        arrayInFile = False
        counter = -1
        
        Do Until textStream.AtEndOfStream
            myLineStr = textStream.ReadLine     'read the file line by line
            
            If InStr(myLineStr, "myPineappleParams = [") Then    'checks the array is in the file
                arrayInFile = True
                counter = 0     'counts lines of the array to input the respective x and y vector values from the software
                arrayLine = -1      'needs to start at -1 to line up with array values
            End If

            If ((arrayInFile = True) And (counter < UBound(xArray) + 1)) Then      'only replace lines within the array
                'the first element selects the algorithm and shouldn't be a variable
                'the software currently only produces 2 variables but the array is larger for consistency when more are used in the future
                variableParameters = CStr("[1," + CStr(xArray(counter)) + "," + CStr(yArray(counter)) + ",,,,,,,,]")

                If Not ((counter < 0) And (counter < arrayLine)) Then      'only insert x and y values to the equivalent line of the array
                    If InStr(myLineStr, ",,,,,,,]") Then        'identify the lines of the array in the js file
                        myLineStr = Replace(myLineStr, myLineStr, "    " + variableParameters)       'sets parameters to x and y values
                        If arrayLine < UBound(xArray) Then
                            myLineStr = Replace(myLineStr, "]", "],")       'add trailing comma back into all other than the last line
                        End If
                        counter = counter + 1
                    End If
                End If

            arrayLine = arrayLine + 1
            End If

            myReplacementFile.WriteLine(myLineStr)      'write the line to the temporary file            
        Loop

        myReplacementFile.Close
        textStream.Close

        If arrayInFile = True Then      'only replace files with changes
            fso.DeleteFile(myBaseDir + fileName)        'delete the original file
            fso.MoveFile fileTemp, myBaseDir + fileName        'replace the original file with the temporary file
            WScript.Echo "                          " + CStr(counter) + "   sets of parameters updated"
        Else
            WScript.Echo
            WScript.Echo
            WScript.Echo "          Error:      'myPineappleParams = [' not found in file:     " + fso.GetFileName(file)
            WScript.Echo
        End If

    End If
        WScript.Echo
Next