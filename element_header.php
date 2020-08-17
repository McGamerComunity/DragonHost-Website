<?php
include("element_header2.php");
?>
    <div class="audio-player-area">
            <div class="container">
                <div class="musica-audio-player">
                    <div id="musica-audio-player-container" class="jp-video" role="application" aria-label="media player">
                        <div id="tr-player"></div>
                    	<div class="jp-type-playlist">
                            <div class="audio-table">
                                <div class="jp-controls">
                                    <button class="jp-previous"></button>
                                    <button class="jp-play"></button>
                                    <button class="jp-next"></button>
                                    <button class="jp-stop"></button>
                                </div>
                                <div class="jp-toggles">
                                    <button class="jp-repeat">repeat</button>
                                    <button class="jp-shuffle">shuffle</button>
                                    <button class="jp-full-screen">full screen</button>
                                </div>
                                <div class="jp-gui">
                        			<div class="jp-video-play">
                        				<button class="jp-video-play-icon"></button>
                        			</div>
                        			<div class="jp-interface">
                        				<div class="jp-progress">
                        					<div class="jp-seek-bar">
                        						<div class="jp-play-bar"></div>
                        					</div>
                        				</div>
                        				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                        				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                        <button class="audio-playlist">...</button>
                        			</div>

                        		</div>
                                <div class="jp-volume-controls">
                                    <button class="jp-mute"></button>
                                    <button class="jp-volume-max"></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                </div>
                                <div class="jp-details" style="display: inline-block;">
                                    <div class="jp-title" aria-label="title">&nbsp;</div>
                                </div><!--/title-->
                                <div id="musica-jquery-jplayer" class="jp-jplayer"></div>
                            </div>
                    		<div class="audio-playlist-wrapper" >
                                <div class="container" id="playlist-wrapper">
                                    <div class="jp-playlist  nicescroll-active">
                            			<ul>
                            				<li>
                            				</li>
                            			</ul>
                            		</div>
                                </div>
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>