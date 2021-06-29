<script>
    function FSxProject() {
        var x = document.getElementById("FSx");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
</script>

<button class="FSxButton" onclick="FSxProject()" style="padding: 17px 22px; font-family: Luckiest Guy; font-size: 22px">
AWS FSx</button>

<div id="FSx" style="display: none">
<h4 style="text-align: left; color: rgba(219, 143, 89, 0.955); margin-left: 50px; font-family: candara; font-weight: bold">
    Amazon FSx for Windows File Server</h4>

    <div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(218, 178, 152, 0.04); border-radius: 30px">
        <p style="font-size: 18px; font-family: candara; color: rgba(233, 218, 173, 0.85)">
            As I work for an engineering company, there are several applications that we regularly use which run off files stored in the on-premises shared drive. 
            This worked well when everyone was in the office but, now everyone works remotely and the company is expanding to hire staff from across the country, it is starting to have issues and has been unusable in some instances. 
            As Systems, Operations and IT Lead, I did research into several cloud based shared drive options to upgrade the system to meet our new needs and eventually decided on <a href="https://aws.amazon.com/fsx/" target="_blank" title="Open Amazon FSx in a new tab" alt="Link to Amazon FSx">Amazon FSx</a> as the most suitable alternative - an AWS managed Windows file server that can be mapped to multiple Windows, Mac or Linux computers and used like a web based external hard drive.
            <br>
            <br>
            After presenting my research to my line manager (who is also the head of operations) and him agreeing that it was better to go with a company like AWS that we can trust and build into future company developments using their other services, my next step was creating a trial version to see how it worked in practice and create a set-up guide for company records. 
            To use FSx, I would first need to create an <a href="https://aws.amazon.com/directoryservice/" target="_blank" title="Open the AWS Active Directory page in a new tab" alt="Link to the AWS Active Directory page">AWS Active Directory</a> for the resource domain (a domain just consisting of resources for the users of a different domain to use) that the shared drive would be in, that would then be accessible by users in the existing company domain via a <a href="https://aws.amazon.com/premiumsupport/knowledge-center/create-trust-windows-on-premises-dx/" target="_blank" title="See information about forest trusts in a new tab" alt="Link to a page about forest trusts">forest trust</a> relationship.
            <br>
            <br>
            After taking some time to learn about how active directories worked in the first place and watching a few walkthrough videos of the whole set-up process on AWS, I eventually managed to set up the AWS active directory and a mappable FSx drive within it!
            This task also included a lot of AWS networking and security management and it was actually a networking issue that prevented my first attempt from working, I had created an AWS EC2 instance but wasn't able to connect to the drive and after over a day of checking the active directory and FSx configurations, I found that I had forgotten to add a rule to one of the route tables to forward traffic to the appropriate subnet.
            To ensure that this was the only issue with my set-up process and I hadn't inadvertently fixed another issue with my previous tinkering, I deleted everything I had made and recreated it all (this time documenting my steps) and it worked!
            I was able to connect to the drive from multiple EC2 instances and use the files as expected.
            In reality, we would then create a forest trust from that active directory to the company one to allow staff to access to files from their own systems rather than EC2 instances like the ones I created that were in the same active directory, but that is a standard active directory function that can be done from the EC2 instance that would still be set up to manage the AWS active directory so this was enough for proof that it would work as we needed and wasn't going to be overly complicated.
            <br>
            <br>
            Below are some screenshots I took while mapping an EC2 instance to my FSx drive:
            <br>
        </p>
    </div>
    <?php include 'FSxGallery.php'; ?>
</div>