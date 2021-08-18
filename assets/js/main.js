function discordserver(){
    window.open('https://discord.com/invite/rrtXrZBVRb')
  }

  function youtubechannel(){
    window.open('https://www.youtube.com/channel/UC9S_8uo3_enZpbjiUxxRzIg?sub_confirmation=1')
  }

  function addons(){
    window.location.replace('addons.php')
  }

  function minecraft(){
    window.location.replace('minecraft.php')
  }

  function gxt(){
    window.location.replace('gxt.php')
  }


  function copyUrl() {
    const itemToCopy = document.body;
    const textarea = document.createElement('textarea');

    itemToCopy.appendChild(textarea);
    textarea.innerText = "Dominguez#9535";
    textarea.select();
    textarea.setSelectionRange(0, 99999);
    document.execCommand("copy");
    itemToCopy.removeChild(textarea);
}

dominguez.onclick = function(){
  $("#dominguez").notify("Discord copiado!", "success");
}