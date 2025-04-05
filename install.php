
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <style id="style1" type="text/css">
            .hidden           {display:none;}
            body, html {
                /* height: 100%; */
                font-family:helvetica;
                background-color:#111;
                margin:0px;
                overflow-x:visible;
                color:#fff;

                text-align: center;
            }

            html {
                display: table;
                margin: auto;
            }

            body {
                display: table-cell;
                vertical-align: middle;
            }
            button {
                /* reset styling*/
                background: none;
	            color: inherit;
	            border: none;
	            padding: 0;
	            font: inherit;
	            cursor: pointer;
	            outline: inherit;

                /* custom styling */
                color:#fff;
                display:block;
                width:100%;
                padding-top:10px;
                padding-bottom:10px;
                border-radius:10px;
                background-color:#ff3056;
                margin:10px;

            }

            .visible          {display:block;}
        </style>
    </head>
    <!-- AdMaven -->
    <!-- <script data-cfasync="false" src="//d3bbyfw7v2aifi.cloudfront.net/?fybbd=955673"></script> -->
    <!-- <script data-cfasync="false" src="//d3bbyfw7v2aifi.cloudfront.net/?fybbd=955671"></script> -->
    <body>
        <!-- Freebox -->
        <!-- <script async="async" data-cfasync="false" src="//pl16684534.profitablegatetocontent.com/653f31d36a518287199c316569b54075/invoke.js"></script> -->
        <!-- <div id="container-653f31d36a518287199c316569b54075"></div><script type='text/javascript' src='//pl16686700.profitablegatetocontent.com/cb/52/2a/cb522a2405022f0c25ef5952b59949b5.js'></script> -->
	
	<!-- Lungs -->
        <meta name="monetag" content="338b7df6321b7d1542b561d16e430a67">
        <div class="visible">
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; download('direct')" data-cf-modified-1ddd098b9e292703de98b67a-="">Direct Install</button>
            <!-- <button onclick="download('direct_alt')">Direct Install (Support Scarlet)</button> -->
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; download('computer')" data-cf-modified-1ddd098b9e292703de98b67a-="">Computer (No-Revokes)</button>
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; download('alpha')" data-cf-modified-1ddd098b9e292703de98b67a-="">IPA (Custom Cert + Developer Login)</button>
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; download('trollstore')" data-cf-modified-1ddd098b9e292703de98b67a-="">IPA (Trollstore)</button>
        </div>

        <div class="hidden">
            <h1>Please wait as Scarlet installs.</h1>
            <h1 id="timer"></h1>
        </div>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1ddd098b9e292703de98b67a-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92bca8a9aafc22ff","version":"2025.3.0","r":1,"token":"bf623057bd9641aaa3065fe5187cc993","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>
</html>

<script type="1ddd098b9e292703de98b67a-text/javascript">
    function download(option){
        console.log(option);
        document.getElementsByClassName('visible')[0].remove();
        with( document.styleSheets.style1.cssRules[0] )
        style.display = style.display ? "" : "block";

        var time = 10;
        var x = setInterval(function() {
            console.log(time);
            document.getElementById("timer").innerHTML = time;
            if (time <= 0) { 
                clearInterval(x);
                if (option == "direct")
                {
                    // window.open("itms-services://?action=download-manifest&url=https://resources.usescarlet.com/Plist/ScarletAlpha.plist","_self")
                    window.open("https://balance.usescarlet.com/secure", "_self")
//		   window.open("https://resources.usescarlet.com/api/install/secure","_self")
                }
                else if (option == "direct_alt")
                {
                      window.open("https://onepiecered.co/s?7rv", "_self")
//                    window.open("https://bstlar.com/B/scarletdirect","_self")
                }
                else if (option == "computer")
                {
                    window.open("https://github.com/DebianArch64/DebProvision","_self")
                }
                else if (option == "alpha")
                {
                    window.open("https://resources.usescarlet.com/repo/IPAs/ScarletAlpha.ipa","_self")
                }
                else if (option == "trollstore")
                {
                    window.open("https://resources.usescarlet.com/repo/IPAs/Entitled.ipa","_self")
                }
                else
                {
                    window.alert("Unknown option: " + option);
                }
            return;
         }
         time--;
    }, 1000);
}
</script>
