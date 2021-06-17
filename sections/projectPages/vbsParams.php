<script>
    function vbsParamsProject() {
        var x = document.getElementById("vbsParams");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
</script>

<button class="vbsParamsButton" onclick="vbsParamsProject()" style="padding: 17px 22px; font-family: Luckiest Guy; font-size: 22px">
Data Science</button>

<div id="vbsParams" style="display: none">
<h4 style="text-align: left; color: rgba(207, 150, 231, 0.955); margin-left: 50px; font-family: candara; font-weight: bold">
    Read and Replace Data</h4>

    <div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(195, 152, 218, 0.04); border-radius: 30px; color: rgb(210, 190, 170)">
        <p style="font-size: 18px; font-family: candara; color: rgba(212, 192, 228, 0.85)">
            This project came about as a way to use an array in a JavaScript file to provide the weighted parameters for a machine learning program.
            The machine learning program would need to run using the weights provided in the array, then update each row of parameters in the array with the new weights that it had calculated after each run by using this VBS script.
            <br>
            <br>
            Click to see my <a href="../../assets/VBS/replaceParameters.vbs" target="_blank" title="See VBS script in a new tab">VBS script</a> and the <a href="../../assets/VBS/test_Something1.js" target="_blank" title="See mock JavaScript in a new tab">mock JavaScript file</a> that it would go through to replace all the lines of the myPineappleParams array.
            <br>
            Alternatively you can use these links to download a copy of the files and test the script yourself: <a href="../../assets/VBS/replaceParameters.vbs" download title="Download the VBS script">VBS</a> and <a href="../../assets/VBS/test_Something1.js" download title="Download JavaScript file">JavaScript</a>.
            <br>
            Note that if run via the Windows Based Script Host there will be several blank notification boxes as I wrote it to print blank lines when run with powershell using cscript.
            <br>
            <br>
            I have written a lot of comments explaining what is happening throughout the VBS script so it shouldn't be too hard to follow, even if you don't really understand the code itself.
            In this case when used on its own and not by the machine learning program, it just scans through the current directory to locate any JavaScript files with "test_" in the name.
            It then scans through them to find the array that we want to update the values of, which is the "myPineappleParams" array in the test_Something1.js file (the machine learning program would usually produce hundreds of x & y values, but I have used an array of just 10 values to test the script).
            Upon finding the pineapple parameters array, the script goes through each line and replaces the x & y values in the array with the corresponding value from the x & y array that would have come from the machine learning program - i.e. the first row of pineapple parameters would get the first value from each of the x & y arrays, the second row of parameters would get the second x & y values etc - and the rest of the file is left untouched.
            The script updates the JS file and just outputs the name of each file it edits and how many parameters there were in it to replace.
            <br>
            <br>
            If you downloaded the files to test, try duplicating the test file to see the VBS script run through multiple files.
            If you edit the name of the pineapple parameters array in a test file then you will get an error notice that the script hasn't found the array in a file that matches the naming convention of files that should have the array, the script then will move on to checking the next file in the folder.
        </p>
    </div>
</div>