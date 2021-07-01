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
    <h4 style="text-align: left; color: rgba(140, 167, 224, 0.85); margin-left: 50px; font-family: candara; font-weight: bold">
    Azure Virtual Machine</h4>

    <div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(166, 152, 218, 0.08); border-radius: 30px; color: rgb(210, 190, 170)">
        <div class="row">
            <div class="column" style="width: 60%">
                <p style="font-size: 18px; font-family: candara; color: rgba(200, 210, 230, 0.85)">
                    I'm currently saving up to buy a good laptop but the one I'm currently working on is a £250 cloudbook so, as you can imagine, it does not have much processing power and can't handle much more than the standard functionality of a laptop. 
                    As I've recently been hired as a remote project engineer, I quickly hit that wall while attempting to set up the requirements for a machine learning project (wishful thinking, I know). 
                    Though I'm a Windows user, I learnt to code on an Ubuntu WSL and had also learnt about cloud computing on that same course, so decided to put my training to use and used <a href="https://azure.microsoft.com/en-gb/" target="_blank" title="Microsoft Azure: Cloud Computing Services" alt="Link to Microsoft Azure's website">Microsoft Azure</a> to create a cloud based Linux virtual machine.
                    I chose Azure simply because I saw a step by step of how to set a VM up with VSCode with them and it looked pretty straightforwards.
                    I'd only used AWS before so it took a small adjustment period and to understand the different terms for things, different arrangements etc and I did end up saving all the files externally and making a new VM some time after getting it running to use better specs, 
                    but overall I found Azure very straightforward to navigate and understand and to be able to see what needed to be upgraded to achieve what you want to do.
                </p>
            </div>
        
            <div class="column" style="width: 40%;">
                <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/main/assets/Linux%20screenshot.png" alt="Screenshot of the virtual machine" title="Linux virtual machine" height="auto" width="95%" style="margin-left: 6%; margin-top: 40px">
                <br><br>
            </div>
        </div>
        
        <p style="font-size: 18px; font-family: candara; color: rgba(200, 210, 230, 0.85)">
            I did eventually end up getting a laptop from work as we started to use software that required a dedicated graphics card, but due to the credit you get when you join Azure I was able to jump into some of the more interesting optional projects that I would have had to miss otherwise, and without even having to pay for anything!
            Also, even though there was some software my laptop can run, it only has 57GB of memory altogether and most of that is taken up by the system so I definitely still needed another system that could do something like have more than one software installed at a time and ended up running a Windows VM as well as the Linux one.
            I've now downloaded a WSL on my work laptop so don't use either VM at the moment, but still have them as you're only charged for time they're in use so I may as well keep them ready for if I do need them again for anything.
        </p>
    </div>
    <br>
</div>