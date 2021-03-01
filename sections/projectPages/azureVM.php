<script>
    function azureProject() {
        var x = document.getElementById("azureVM");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
</script>

<button class="azureButton" onclick="azureProject()" style="padding: 17px 22px; font-family: Luckiest Guy; font-size: 22px">
Azure VM</button>

<div id="azureVM" style="display: none">
    <h4 style="text-align: left; color: rgba(207, 150, 231, 0.955); margin-left: 50px; font-family: candara; font-weight: bold">
    Azure Virtual Machine</h4>

    <div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(88, 192, 218, 0.04); border-radius: 30px; color: rgb(210, 190, 170)">
        <div class="row">
            <div class="column" style="width: 60%">
                <p style="font-size: 17px; font-family: candara; color: rgba(198, 202, 228, 0.85); font-size: 18px">
                    I'm currently saving up to buy a good laptop but the one I'm currently working on is a £250 cloudbook so, as you can imagine, it does not have much processing power and can't handle much more than the standard functionality of a laptop. 
                    As I've recently been hired as a remote project engineer, I quickly hit that wall while attempting to set up the requirements for a machine learning project (wishful thinking, I know). 
                    Though I'm a Windows user, I learnt to code on an Ubuntu WSL and had also learnt about cloud computing on that same course, so decided to put my training to use and used <a href="https://azure.microsoft.com/en-gb/" target="_blank" title="Microsoft Azure: Cloud Computing Services" alt="Link to Microsoft Azure's website">Microsoft Azure</a> to create a cloud based Linux virtual machine.
                    I chose Azure simply because I saw a step by step of how to set a VM up with VSCode with them and it looked pretty straightforwards.
                    I'd only used AWS before so it took a small adjustment period and to understand the different terms for things, different arrangements etc and I did end up saving all the files externally and making a new VM some time after getting it running to use better specs, 
                    but overall I found Azure very straightforward to navigate and understand and to be able to see what needed to be upgraded to achieve what you want to do.

                </p>
                <br>
            </div>
        
            <div class="column" style="width: 40%;">
                <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/main/assets/Linux%20screenshot.png" alt="Screenshot of the virtual machine" title="Linux virtual machine" height="auto" width="95%" style="margin-left: 6%; margin-top: 40px">
                <br><br>
            </div>
        </div>
        
        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(207, 150, 231, 0.95); margin-left: 10px; font-family: candara">Input</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgba(198, 202, 228, 0.85); font-size: 18px">
        T
        </p>
        
        
        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(207, 150, 231, 0.95); margin-left: 10px; font-family: candara">Navigation buttons</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgba(198, 202, 228, 0.85); font-size: 18px">
            The majority of the buttons I added to the sheet were for ease of navigation; they give the user a quick way to jump to any specific week number, this current week or back to the input (home) page. 
            These were all pretty simple to code as they just required a function to 'activate' the sheet by it's name (e.g. Input or 1 for week 1). 
        </p>


        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(207, 150, 231, 0.95); margin-left: 10px; font-family: candara">Update</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgba(198, 202, 228, 0.85); font-size: 18px">
            The
        </p>
        
    </div>
</div>
