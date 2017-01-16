<!DOCTYPE html>

<html class="wf-doc wf-proximanova-n4-active wf-proximanova-n3-active wf-proximanova-n6-active wf-active avoid-top-bar avoid-left-sidebar avoid-right-sidebar avoid-bottom-bar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="_csrf" content="njjNLCff-MvuYzWGmkHUwwKiVtGXn0U-Maqk">
    <meta name="hostedSubdomain" content="webflow.io">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../layout/styles/designer.css">
	<link rel="stylesheet" type="text/css" href="icon.css">
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
		<script type="text/javascript" src="../layout/scripts/jquery-s3slider.js"></script>
    <style type="text/css">
        .tk-proxima-nova {
            font-family: "proxima-nova", sans-serif;
        }
    </style>
    <style type="text/css">
       
    </style>
    <script type="text/javascript">
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}
		
		window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
					}
				}
			}
		}
			
        window.analytics || (window.analytics = []), window.analytics.methods = ["identify", "track", "trackLink", "trackForm", "trackClick", "trackSubmit", "page", "pageview", "ab", "alias", "ready", "group", "on", "once", "off"], window.analytics.factory = function(a) {
            return function() {
                var t = Array.prototype.slice.call(arguments);
                return t.unshift(a), window.analytics.push(t), window.analytics
            }
        };
        for (var i = 0; i < window.analytics.methods.length; i++) {
            var method = window.analytics.methods[i];
            window.analytics[method] = window.analytics.factory(method)
        }
        window.analytics.load = function(a) {
                var t = document.createElement("script");
                t.type = "text/javascript", t.async = !0, t.src = ("https:" === document.location.protocol ? "https://" : "http://") + "d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/" + a + "/analytics.min.js";
                var n = document.getElementsByTagName("script")[0];
                n.parentNode.insertBefore(t, n)
            }, window.analytics.SNIPPET_VERSION = "2.0.6",
            window.analytics.load("YmB1vofMGVAA51D77lrJmkiKUrl2BPA2"),
            window.analytics.page();
    </script>
    <link rel="stylesheet" type="text/css" href="./Webflow - Eranga&#39;s First Site_files/css">
    <style type="text/css"></style>
</head>

<body class="wf-control" style="float:left; width:1200px; overflow: auto;">
	<div>
	
	 
	<?php
	
		if(isset($_GET['type'])){
			if($_GET['type'] == 'home'){
				require "../../index.php";
			}
			else if($_GET['type'] == 'aboutus'){
				require "about_us.php";
			}
			else if($_GET['type'] == 'view3'){
				require "gallery.php";
			}
			else if($_GET['type'] == 'source'){
				require "source.php";
			}
		}
		else{
			require "../../index.php";
		}
	
		?>
		
	</div>
    
    <div id="right-sidebar" data-bind="visible: rightSidebar.visible, css: {&quot;disabled&quot;: rightSidebar.disabled }" class="right-sidebar">
	
        <div class="tabs">
            <div data-key="styleTab" data-tip="text: &quot;Style &lt;kbd&gt;S&lt;/kbd&gt;&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: styleTab.visible }, click: styleTab.show" class="tab show-tip style-tab active">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
            <div data-key="settingsTab" data-tip="text: &quot;Settings &lt;kbd&gt;D&lt;/kbd&gt;&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: settingsTab.visible }, click: settingsTab.show" class="tab show-tip settings-tab">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
            <div data-key="navigatorTab" data-tip="text: &quot;Navigator &lt;kbd&gt;F&lt;/kbd&gt;&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: navigatorTab.visible }, click: navigatorTab.show" class="tab show-tip navigator-tab">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
            <div data-key="allStylesTab" data-tip="text: &quot;Style Manager&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: allStylesTab.visible }, click: allStylesTab.show" class="tab show-tip all-styles-tab">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
            <div data-key="objectsTab" data-tip="text: &quot;Objects&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: objectsTab.visible }, click: objectsTab.show" class="tab show-tip objects-tab">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
            <div data-key="assetsTab" data-tip="text: &quot;Assets&quot;, dir: bottom, hideWhen: active, hideOn: click" data-bind="css: { &quot;active&quot;: assetsTab.visible }, click: assetsTab.show" class="tab show-tip assets-tab">
				<span class="sprite-mid">
					<i></i>
				</span>
			</div>
        </div>
		
        <div id="flux-tabs" class="inner">
            <div data-reactroot="" class="tab-pane">
                <div class="style-tab kit-sidebar-tab">
                    <div class="kit-sidebar-top-section">
					
                        <div class="selected-node-title">
                            <div class="type-icon-inset">
                                <div class="el-icon n-body"></div>
                            </div>
                            <div class="label">Body</div>
                        </div>
                        <div class="kit-divider top"></div>
                        <div class="selector-widget clearfix">
                            <div class="css-selector">
                                <div class="chunk main">
                                    <div class="nest-label">
                                        <div class="label">Selector:</div>
                                    </div>
                                    <div class="inset clearfix editable need-class">
                                        <div class="kit-button linked"><i class="sprite-main"></i></div>
                                        <div class="dummy-state"><span class="no-element">None</span><span class="need-class">Select a Class or Tag</span><span class="is-instance"><i class="sprite-main"></i>Double-click symbol to start editing</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kit-blocker no-class">
                        <div class="notice dummy">
                            <div class="icon sprite-main"></div>
                            <div class="message">
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">Select an element of your website to activate this panel.</div>
                            </div>
                        </div>
                        <div class="notice too-small">
                            <div class="icon sprite-main"></div>
                            <div class="message">
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">Oops, it looks like your screen is too small to edit styles for this device.</div>
                                <div class="kit-divider"></div>
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">Resize your screen so the canvas fits.</div>
                            </div>
                        </div>
                        <div class="notice zoom">
                            <div class="icon sprite-main"></div>
                            <div class="message">
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">Oops, it looks like your zoom level has been changed.</div>
                                <div class="kit-divider"></div>
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">
                                    Choose
                                    <strong>View › Actual Size</strong>
                                    to enable standard zoom.
                                    
                                </div>
                            </div>
                        </div>
                        <div class="notice symbol">
                            <div class="icon sprite-main"></div>
                            <div class="message">
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;">
                                    Editing this symbol will affect
                                    <strong>0 copies</strong>
                                   across your website.
                                    
                                </div>
                                <div class="kit-divider"></div>
                                <div class="bem-Paragraph " style="font-size: 11px; padding: 0px 20px 8px; line-height: 14px;"><strong>Double-click</strong>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="notice no-class">
                            <div class="icon sprite-main"></div>
                            <div class="message">
                                <div class="bem-Heading bem-Heading-dim bem-Heading-h5"><span><span>Give your element a</span>
                                   
                                    <div class="token">Class</div>
                                    
                                    <span>to: </span></span>
                                </div>
                                <ul>
									<li><i class="icon-main noclass-states"></i><span><a href="admin_back.php?type=source">Show</a><strong>Source</strong></span></li>
                                    <li><i class="icon-main noclass-position"></i><span>Change its <strong>Size &amp; Position</strong></span></li>
                                    <li><i class="icon-main noclass-type"></i><span><!-- react-text: 76 -->Style its <!-- /react-text --><strong>Typography</strong></span></li>
                                    <li><i class="icon-main noclass-background"></i><span><!-- react-text: 81 -->Style its <!-- /react-text --><strong>Background</strong></span></li>
                                    <li><i class="icon-main noclass-border"></i><span>Style its <strong>Borders</strong></span></li>
                                    <li><i class="icon-main noclass-shadow"></i><span>Style its <strong>Shadows</strong></span></li>
                                    <li><i class="icon-main noclass-effects"></i><span>Add <strong>Effects</strong></span></li>
                                    <li><i class="icon-main noclass-states"></i><span>Add <strong>States</strong></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hud-preload">preload</div>
            </div>
        </div>
	</div>
	
    <div id="designer-app-react-mount">
        <div data-reactroot="">
            <div class="bem-TopBar">
			
                <div class="bem-TopBar_Body" style="top: 0px;">
                    <div class="bem-TopBar_Body_Group bem-TopBar_Body_Group-left">
                        <div class="bem-TopBar_Body_ContextLens">
						
 
							
                            <div class="bem-TopBar_Body_ContextLens_Name ">
								
								<span class="bem-TopBar_Body_ContextLens_Name_Label ">Page: </span>
									<div class="dropdown">
									<span class="bem-TopBar_Body_ContextLens_Name_Label ">
										<button onclick="myFunction()" class="dropbtn">page</button>
											<div id="myDropdown" class="dropdown-content">
												<a href="admin_back.php?type=home">Home</a></option>
												<a href="admin_back.php?type=aboutus">About Us</a></option>
												<a href="admin_back.php?type=view3">Gallery></option>
											</div>
									</span>
									</div>
								
								
							</div>
                        </div>
                        <div class="bem-TopBar_Body_Button bem-TopBar_Body_PreviewButton ">
                            <svg width="18" height="14" viewBox="0 0 18 14" class="bem-Svg bem-TopBar_Body_PreviewButton_Icon bem-TopBar_Body_Button_Icon">
                                <path fill="currentColor" d="M9.028 1C4.596 1 1 6.94 1 6.94s3.596 6.1 8.028 6.1c4.434 0 8.027-6.1 8.027-6.1S13.462 1 9.028 1zM9 11a4 4 0 0 1-4-4c0-2.027 1.512-3.683 3.467-3.946A2.48 2.48 0 0 0 8 4.5 2.5 2.5 0 0 0 10.5 7a2.49 2.49 0 0 0 2.234-1.4c.164.437.266.906.266 1.4a4 4 0 0 1-4 4z"></path>
                            </svg>
                        </div>
						<div class="bem-TopBar_Body_ContextLens_Name ">
							
								<span><i>  </i></span>
							
								<svg><img src="teacher.png" width="40" height="40"></svg>
							
						</div>
						
                    </div>
					
                    <div class="bem-TopBar_Body_Group bem-TopBar_Body_Group-right">
                        <div class="bem-TopBar_Body_UndoRedo">
                            <div class="bem-TopBar_Body_Button bem-TopBar_Body_UndoRedo_Undo ">
                                <svg width="17" height="15" viewBox="0 0 17 15" class="bem-Svg bem-TopBar_Body_UndoRedo_Undo_Icon bem-TopBar_Body_Button_Icon">
                                    <path fill="currentColor" d="M7 5.035V1L1 7.498 7 14V9.957c2.17-.03 7.258.312 8.562 4.043h.436S15.858 5.624 7 5.035z"></path>
                                </svg>
                            </div>
                            <div class="bem-TopBar_Body_Button bem-TopBar_Body_UndoRedo_Redo ">
                                <svg width="17" height="15" viewBox="0 0 17 15" class="bem-Svg bem-TopBar_Body_UndoRedo_Redo_Icon bem-TopBar_Body_Button_Icon">
                                    <path fill="currentColor" d="M16 7.498L10 1v4.035C1.14 5.625 1.002 14 1.002 14h.435C2.742 10.27 7.83 9.928 10 9.957V14l6-6.502z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="bem-TopBar_Body_SyncStatus bem-TopBar_Body_SyncStatus-saved">
                            <svg width="20" height="20" viewBox="0 0 20 20" class="bem-Svg bem-TopBar_Body_SyncStatus_Icon bem-TopBar_Body_Button_Icon">
                                <path fill="currentColor" d="M10 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm-.935 13.46l-4.097-3.994 1.396-1.432 2.57 2.506 4.556-5.315 1.518 1.302-5.943 6.933z"></path>
                            </svg>
                        </div>
                        <div class="bem-TopBar_Body_Button bem-TopBar_Body_ExportButton ">
                            <svg width="22" height="16" viewBox="0 0 22 16" class="bem-Svg bem-TopBar_Body_ExportButton_Icon bem-TopBar_Body_Button_Icon">
                                <path fill="currentColor" d="M4.873 8.065L9.18 1.042H5.31L1 8.065 5.308 15H9.18L4.874 8.065zM16.69 1.042h-3.872l4.308 7.023L12.816 15h3.874L21 8.065l-4.31-7.023z"></path>
                            </svg>
                        </div>
                        <div class="bem-TopBar_Body_Button bem-TopBar_Body_PublishButton ">
                            <svg width="18" height="18" viewBox="0 0 18 18" class="bem-Svg bem-TopBar_Body_PublishButton_Icon bem-TopBar_Body_Button_Icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M12.995 9.076c0-.026.005-.05.005-.076 0-3.304-1.582-6.22-4-8-2.418 1.78-4 4.696-4 8 0 .026.004.05.005.076A7.99 7.99 0 0 0 1 16h2.012a7.526 7.526 0 0 1 3.095-2.406A9.797 9.797 0 0 0 9 17a9.797 9.797 0 0 0 2.893-3.406A7.526 7.526 0 0 1 14.988 16H17a7.99 7.99 0 0 0-4.005-6.924zM9 4.436a1.564 1.564 0 0 1 0 3.13 1.564 1.564 0 1 1 0-3.13z"></path>
                            </svg><span class="bem-Text ">Publish</span>
                            <svg width="11" height="7" viewBox="0 0 11 7" class="bem-Svg bem-TopBar_Body_PublishButton_ChevronDown bem-TopBar_Body_Button_Icon">
                                <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" d="M9 2L5.5 5 2 2"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="left-sidebar">
                <div class="left-sidebar-links">
                    <div class="button logo-flux"></div>
                    <div class="button top show-tip add"><i class="icon-main chrome-add"></i></div>
                    <div class="button top show-tip"><i class="icon-main chrome-pages"></i></div>
                    <div class="button top dynamo show-tip"><i class="icon-main chrome-collections"></i></div>
                    <div class="bottom">
                        <div class="button setting sprite-mid edges show-tip active"><i class="icon-main chrome-show-edges"></i></div>
                        <div class="button setting sprite-mid empty show-tip active"><i class="icon-main chrome-show-empty"></i></div>
                        <div class="button setting sprite-mid grid show-tip none"><i class="icon-main chrome-show-grid"></i></div>
                        <div class="button setting sprite-mid xray show-tip with-divider"><i class="icon-main chrome-show-xray"></i></div>
                        <div class="button tutorials show-tip"><i class="icon-main ftu-video-big-blue exclaim"></i><i class="icon-main ftu-video-big"></i></div>
                        <div class="help-section">
                            <div class="button trigger sprite-mid"><i class="icon-main chrome-help"></i></div>
                            <div class="popup-menu">
                                <div class="tick"></div>
                                <div class="link kbase"><i class="sprite-main"></i><span>Help Center</span></div>
                                <div class="link videos"><i class="sprite-main"></i><span>Video Tutorials</span></div>
                                <div class="link videos"><i class="sprite-main"></i><span>Courses</span></div>
                                <div class="link forum"><i class="sprite-main"></i><span>Forums</span></div>
                                <div class="link keys"><i class="sprite-main"></i><span>Keyboard Shortcuts</span></div>
                                <div class="link email"><i class="sprite-main"></i><span>Contact Us</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bem-LeftSidebarPanels visible">
               
            </div>
			<!-- deleter-->
            
            <div class="bem-BottomBar ">
                <div class="bem-BottomBar_Main">
                    <div class="bem-Breadcrumbs">
                        <div class="bem-Breadcrumbs_Container">
                            <div class="bem-Breadcrumbs_Breadcrumb " style="background-color: rgb(212, 212, 212);">
                                <div class="bem-Breadcrumbs_Breadcrumb_Inner last"><i class="el-icon n-body"></i>
                                    <div class="label">Body</div>
                                </div>
                                <svg width="7" height="28" viewBox="0 0 7 28" class="bem-Svg right notch" style="color: rgb(212, 212, 212);">
                                    <path fill="currentColor" d="M.5 0l6 14-6 14H7V0z"></path>
                                    <path fill="#858585" d="M1 0H0l6 14-6 14h1l6-14z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bem-BottomBar_RealtimeSiteViewers">
                        <div class="bem-ProfilePictures" style="display: flex; padding-left: 6.6px; opacity: 0.1;">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
           
    </div>
</body>

</html>