//<![CDATA[
$(document).ready(function(){
    "use strict";
    new jPlayerPlaylist({
        jPlayer: "#musica-jquery-jplayer",
        cssSelectorAncestor: "#musica-audio-player-container"
    }, [
        { 
            title:"ShadowFM",
            artist:"<span class='music-time'>ONLINE</span>",
            mp3:"https://dragon-host.ddns.net/sc_serv/27115/stream",
            oga:"https://dragon-host.ddns.net/sc_serv/27115/stream",
            poster: "https://dragon-host.ddns.net/?shaddowfm&cover"
       },
        {
            title:"SnapeFM #Rap",
            artist:"<span class='music-time'>OFFLINE</span>",
            mp3:"https://panel.neoncraft.net/snapecast/stream?snapefm_rap;type=http&nocache=yes",
            oga:"https://panel.neoncraft.net/snapecast/stream?snapefm;type=http&nocache=yes",
            poster: "https://panel.neoncraft.net/snapecast/dyncover?snapefm_rap"
        },
        {
            title:"SnapeFM #EDM",
            artist:"<span class='music-time'>OFFLINE</span>",
            mp3:"https://panel.neoncraft.net/snapecast/stream?snapefm_edm;type=http&nocache=yes",
            oga:"https://panel.neoncraft.net/snapecast/stream?snapefm;type=http&nocache=yes",
            poster: "https://panel.neoncraft.net/snapecast/dyncover?snapefm_edm"
        }
    ], {
        playlistOptions: {
            autoPlay: false,
            loopOnPrevious: true,
            shuffleOnLoop: true,
            enableRemoveControls: true,
            displayTime: "show",
            freeItemClass: "jp-playlist-item-free",
        },
        swfPath: "js/jquery.jplayer.swf",
        supplied: "oga, mp3",
        wmode: "window",
        useStateClassSkin: true,
        autoBlur: true,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        volume: 1,
    });



});
//]]>
