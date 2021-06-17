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
            After presenting my research to my boss (the head of operations) and him agreeing that it was better to go with a company like AWS that we can trust and build into future company developments using their other services, my next step was creating a trial version to see how it worked in practice and create a set-up guide for company records. 
            To use FSx, I would first need to create an <a href="https://aws.amazon.com/directoryservice/" target="_blank" title="Open the AWS Active Directory page in a new tab" alt="Link to the AWS Active Directory page">AWS Active Directory</a> for the resource domain (a domain just consisting of resources for the users of a different domain to use) that the shared drive would be in, that would then be accessible by users in the existing company domain via a <a href="https://aws.amazon.com/premiumsupport/knowledge-center/create-trust-windows-on-premises-dx/" target="_blank" title="See information about forest trusts in a new tab" alt="Link to a page about forest trusts">forest trust</a> relationship.
            
        </p>

        <a href="" target="_blank" title="" alt=""></a>

    </div>
</div>