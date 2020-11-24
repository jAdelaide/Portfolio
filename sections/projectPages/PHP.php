
<div class="grid-container" style="display: grid; justify-content: center; grid-template-columns: 500px 500px; grid-template-rows: 400px 400px; grid-gap: 0px; margin: 15px; padding: 0px">
    <div style="background-color: rgba(17, 14, 25, 0.6); border-radius: 30px 0px 0px 0px">
        <form>
            <p style="color: rgba(215, 200, 165, 0.7); text-align: right">
                This website is my first PHP project! 
                My favourite thing about PHP so far is that you can utilise the back-end capabilities to automate a lot of the page building; 
                this means that when making a website you can really cut down on the amount of code actually written. <br>
                <br>I've also made a lot of use of PHP's 'include' and 'require' commands (depending on how important the file is for the page). 
                You can include anything from an array to an entire page in your page by saving it as it's own file, and include it as many times as you want. <br
                ><br>For this website, the header and footer are their own php files and so is each section and page of the site.
            </p>
        </form>
    </div>
    <div class="grid-container" style="display: grid; grid-template-rows: 30% 70%; background-color: rgb(17, 14, 25); border-radius: 0px 30px 0px 0px">
        <div style="margin-left: 20px; overflow-y: hidden; height: 220px; width: 450px;">
            <form style="padding-bottom: 0px; padding-top: 10px">
                <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/projectsPageCode.jpg" height="170px" title="The code for the languages homepage section" alt="A 'foreach' and 'if' nested loop that cycles through each language to include in the section">
            </form>
        </div>
        <div>
            <form style="padding-top: 85px">
                <p style="color: rgba(210, 190, 170, 0.7); text-align: left">
                    With PHP you can use 'foreach' and 'if' loops to cycle through values saved in an array (my array is $languages here) so you don't need to include near identical code over and over again. 
                    <br><br>This code makes the base project page (like this one) for each language. Edit the ID in the URL to see the available pages.
                </p>
            </form>
        </div>
    </div>
    <div style="background-color: rgb(17, 14, 25); border-radius: 0px 0px 0px 30px">
        <div>
            <form style="padding-bottom: 0px">
                <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/indexPageCode.jpg" height="100px" width="auto" title="The code for the index (home) page" alt="A series of php include statements for each section on the home page">
            </form>
        </div>
        <div>
            <form style="padding-top: 0px">
                <p style="color: rgba(210, 190, 170, 0.7); text-align: right">
                    By having each section as it's own PHP file, the project index page is able to be extremely simple as just a sequence of include and require statements. <br>
                    <br>This makes changing the layout of the homepage as simple as moving one line of code and any uncompleted segments (like my blogs section in this example) 
                    can still be positioned and included as commented out lines, ready to be quickly and easily included when ready.
                </p>
            </form>
        </div>
    </div>
    <div style="background-color: rgba(17, 14, 25, 0.6); border-radius: 0px 0px 30px 0px">
        <form>
            <p style="color: rgba(215, 200, 165, 0.7); text-align: left">
                Having a number of small sections rather than one big file also means that it's a lot easier to make edits. 
                It's much easier to find the section of code that needs editing when you can easily navigate to the small file that includes it, 
                and if it's something that's repeated on multiple pages you only need to write it once and edit it once. <br>
                <br>This is a huge help, especially when making just small changes to something like the header that only takes a second to make the actual change, 
                but is made a lot longer by having to find and edit it on every page and makes the initial set up of new pages a lot quicker and neater too as it's just a few 'include'/'require' statements for the basic page setup.
            </p>
        </form>
    </div>
</div>