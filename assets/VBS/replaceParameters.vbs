WScript.Echo "Running:  replaceParameters.vbs"
'replaces the existing values in the myPineappleParams array with the x &  y values for the current run of the machine learning program
'#####################################################################
'INPUTS
'myBaseDir should be the directory that holds the relevant project files
myBaseDir = "."
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
y = Split("1,2,3,4,5,6,7,8,9,10",",")        'these arrays are not used if arrays are provided via machine learning

variableParameters = ""     'updated in Do Until loop as it needs to be updated as the script goes through the x and y arrays

For Each file In myOrig.Files
    fileName = file.Name
    fileTemp = fileName + ".temp"       'script creates and writes to a temporary file to avoid errors
    If InStr(fileName, "test_") And LCase(fso.GetExtensionName(fileName)) = "js" Then       'only process files with test_ in the name and a JavaScript file type
        WScript.Echo "Processing file: " + fileName
        
        'set up objects
        Set myReplacementFile = fso.CreateTextFile(fileTemp)
        Set myOriginalFile = fso.GetFile(file)
        Set textStream = myOriginalFile.OpenAsTextStream(1)     '1 means open the file for reading only

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
                counter = 0     'counts lines of the array to input the respective x and y vector values from the ML software
                arrayLine = -1      'needs to start at -1 to line up with array values
            End If

            If ((arrayInFile = True) And (counter < UBound(xArray) + 1)) Then      'only replace lines within the array
                'the first element selects the algorithm and shouldn't be a variable
                'the ML software currently only produces 2 variables but the array is larger for consistency when more are used in the future
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
            fso.DeleteFile(myBaseDir + fileTemp)        'delete the temporary file
            WScript.Echo
            WScript.Echo
            WScript.Echo "          Error:      'myPineappleParams = [' not found in file:     " + fso.GetFileName(file)
            WScript.Echo
        End If

    End If
        WScript.Echo
Next