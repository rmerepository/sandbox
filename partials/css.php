        <style type="text/css">
			/* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
			body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
			img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

			/* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table{border-collapse:collapse !important;}
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

			#bodyCell{padding:28px 20px;}
			#templateContainer{width:700px;}

			#emailUnReadable {
				background-color: #838383 !important;
				color: #FFFFFF;
				font-size: 11px;
				font-family:Helvetica;
				padding-top: 4px;
				padding-bottom: 4px;
			}

			#emailUnReadable a {
				color: #FFFFFF;
			}

			#templateContainer {
				color: #189cc4;
			}

			.largeGap {
				padding-left: 0px !important;
				padding-top: 30px !important;
				padding-bottom: 30px !important;
				padding-right: 0px !important;
			}

			.closingSignature { 
				padding-top: 50px !important;
				padding-bottom: 25px !important;
			}

			hr { 
				border: none !important;
				border-top: 1px solid #DEDEDE !important;
				width: 30px !important;
			}
			
			.hrContent {
				padding-bottom: 0px !important;
				padding-top: 0px !important;
			}
			
			.black { color: #000000; }

			.metGreetings {
				font-size: 17px;
				color: #5F5F5F;
				font-weight: bold;
			}

			
			/* ========== Page Styles ========== */

			/**
			* @tab Page
			* @section background style
			* @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
			* @theme page
			*/
			body, #bodyTable{
				/*@editable*/ background-color:#f7f7f7;
			}

			/**
			* @tab Page
			* @section background style
			* @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
			* @theme page
			*/


			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/  border: 1px solid #efefef !important;
				/*@editable*/  border-top: 5px solid #1a9cc4 !important;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1{
				/*@editable*/ color:#5f5f5f !important;
				display:block;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:25px;
				/*@editable*/ font-style:normal;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2{
				/*@editable*/ color:#5f5f5f!important;
				display:block;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:16px;
				/*@editable*/ font-style:normal;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ letter-spacing:normal;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ 
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3{
				/*@editable*/ color:#555555 !important;
				display:block;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:14px;
				/*@editable*/ font-weight:normal;
				/*@editable*/ line-height:100%;
				/*@editable*/ letter-spacing:normal;
				margin-top: 23px;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-decoration: underline;
				/*@editable*/ 

			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4{
				/*@editable*/ color:#808080 !important;
				display:block;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:14px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ letter-spacing:normal;
				margin-top:20px;
				margin-right:0;
				margin-bottom:11px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}


			h5 {
				/*@editable*/ font-family:Helvetica;
				margin: 0;
				font-size: 14px;
				color: #4B4B4B;
				margin-bottom: 13px;
				line-height: 14px;
			}

			/* ========== Header Styles ========== */

			/**
			* @tab Header
			* @section preheader style
			* @tip Set the background color and bottom border for your email's preheader area.
			* @theme header
			*/
			#templatePreheader{
				/*@editable*/ background-color:#1a9cc4;
				/*@editable*/ border:1px solid #1a9cc4;
			}

			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent{
				/*@editable*/ color:#808080;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Header
			* @section preheader link
			* @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
			*/
			.preheaderContent a:link, .preheaderContent a:visited, /* Yahoo! Mail Override */ .preheaderContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#606060;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and borders for your email's header area.
			* @theme header
			*/
			#templateHeader{
				/*@editable*/ background-color:#F4F4F4;
				/*@editable*/ border-top:1px solid #FFFFFF;
				
			}

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:20px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding-top:20px;
				/*@editable*/ padding-right:0;
				/*@editable*/ padding-bottom:20px;
				/*@editable*/ padding-left:20px;
				/*@editable*/ text-align:left;
				/*@editable*/ vertical-align:middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#EB4102;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:600px;
			}

			/* ========== Body Styles ========== */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color and borders for your email's body area.
			*/
			#templateBody{
				/*@editable*/ background-color:#fdfcfc;
				/*@editable*/ border-top:1px solid #eaeaea;
				/*@editable*/ border-bottom:1px solid #eaeaea;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent{
				/*@editable*/ color:#949494;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				padding-top:10px;
				padding-right:40px;
				padding-bottom:10px;
				padding-left:40px;
				/*@editable*/ text-align:left;
			}

			.bodyContentw {
								/*@editable*/ color:#949494;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				padding-top:10px;
				padding-right:40px;
				padding-bottom:10px;
				padding-left:40px;
				background-color: #FFF;
				/*@editable*/ text-align:left;
				border-top: 1px solid #F3F3F3;
				border-bottom: 1px solid #F3F3F3;
			}
				
		
			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#189cc4;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:none;
			}

			.bodyContent img{
				display:inline;
				height:auto;
				max-width:560px;
			}

			/* ========== Footer Styles ========== */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and borders for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				/*@editable*/ background-color:#f3f3f3;

			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent{
				/*@editable*/ color:#808080;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:11px;
				/*@editable*/ line-height:150%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
				/*@editable*/ color:#189cc4;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:none;
			}

			.widthSpan { width: 100% }
			.alignCenter { text-align: center !important;}
			.topMarginGap { margin-top: 51px !important;}
			.moderateRed { color: #c83452 !important; }
			.strongCyan { color: #169cc4 !important; }
			.divider { 
				width: 200px !important; 
				padding-left: 20px;
				border-top: 1px solid #EEE;
			}

			.colWrapper {
				background-color: #FFF;
				width: 100%;
				border: 1px #EAEAEA solid;
				border-radius: 4px;
			}

			.col4 {
				width: 25%;
			
			}

			.colWrapper .col4:last-child{
				border-right: none;
			}


			.col3 {
				width: 33.3%;
				height: 100%;
				
			}

			.col2 {
				border-top: 5px solid #E0E0E0 !important; 
				width: 49%;
				background-color: #FFFFFF;
				line-height: 25px;
			}
	
			.col2:last-child{
				margin-left: 10px;
			}
			

			.col2 td{
				padding-top: 20px;
				padding-right: 9px;
				padding-bottom: 30px;
				padding-left: 9px;
			}

			.colWrapper .col3:last-child{
				border-right: none;
			}


			.tblColHead {
				color: #979797;
				font-weight: normal;
				text-align: center;
				padding-top: 15px;
				padding-bottom: 15px;
			}

			.tblColValue {
					text-align: center;
					font-size: 19px;
					padding-top: 2px;
					padding-right: 0px;
					padding-bottom: 15px;
					padding-left: 0px;
					color: #747474;
			}

			.rmeMdLink {
				letter-spacing:-0.5px;
				line-height:100%;
				text-align:center;
				text-decoration:none !important;
				color:#ffffff !important;
				font-family:Helvetica;
				padding-top: 12px;
				padding-bottom: 12px;
				padding-left: 17px;
				padding-right: 17px;
				word-wrap:break-word!important;
			}

			.rmeMdBtnStyle {
				border-top-left-radius: 4px;
				border-top-right-radius: 4px;
				border-bottom-right-radius: 4px;
				border-bottom-left-radius: 4px;
				background-color: #0DA5CF !important;
				color:#ffffff;
				font-family:Helvetica;
				padding-top: 12px;
				padding-bottom: 12px;
				padding-left: 17px;
				padding-right: 17px;
				border-collapse:collapse;
			}
			

			/* /\/\/\/\/\/\/\/\/ MOBILE STYLES /\/\/\/\/\/\/\/\/ */

            @media only screen and (max-width: 480px){
				/* /\/\/\/\/\/\/ CLIENT-SPECIFIC MOBILE STYLES /\/\/\/\/\/\/ */
				body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */

				/* /\/\/\/\/\/\/ MOBILE RESET STYLES /\/\/\/\/\/\/ */
				#bodyCell{padding:10px !important;}

				/* /\/\/\/\/\/\/ MOBILE TEMPLATE STYLES /\/\/\/\/\/\/ */

				/* ======== Page Styles ======== */

				.topMarginGap { margin-top: 30px !important;}

				/**
				* @tab Mobile Styles
				* @section template width
				* @tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
				*/
				#templateContainer{
					max-width:700px !important;
					/*@editable*/ width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 1
				* @tip Make the first-level headings larger in size for better readability on small screens.
				*/
				h1{
					/*@editable*/ font-size:20px !important;
					/*@editable*/ line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 2
				* @tip Make the second-level headings larger in size for better readability on small screens.
				*/
				h2{
					/*@editable*/ font-size:15px !important;
					/*@editable*/ line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 3
				* @tip Make the third-level headings larger in size for better readability on small screens.
				*/
				h3{
					/*@editable*/ font-size:14px !important;
					/*@editable*/ line-height:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section heading 4
				* @tip Make the fourth-level headings larger in size for better readability on small screens.
				*/
				h4{
					/*@editable*/ font-size:16px !important;
					/*@editable*/ line-height:100% !important;
				}

				/* ======== Header Styles ======== */

				#templatePreheader{display:none !important;} /* Hide the template preheader to save space */

				/**
				* @tab Mobile Styles
				* @section header image
				* @tip Make the main header image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
				*/
				#headerImage{
					height:auto !important;
					/*@editable*/ max-width:316px !important;
					/*@editable*/ width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section header text
				* @tip Make the header content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.headerContent{
					/*@editable*/ font-size:20px !important;
					/*@editable*/ line-height:125% !important;
					padding-left: 20px !important; 
					padding-right: 20px !important; 
					padding-top: 10px !important;
					padding-bottom: 10px !important;  
				}

				/* ======== Body Styles ======== */

				/**
				* @tab Mobile Styles
				* @section body image
				* @tip Make the main body image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
				*/
				#bodyImage{
					height:auto !important;
					/*@editable*/ max-width:560px !important;
					/*@editable*/ width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section body text
				* @tip Make the body content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.bodyContent{
					/*@editable*/ font-size:15px !important;
					/*@editable*/ line-height:125% !important;
							padding-top:10px;
							padding-right:20px;
							padding-bottom:10px;
							padding-left:20px;
				}


				.col2 {
					width: 100%;
					margin-left: 0px !important;
					margin-bottom: 10px; 
				}	

				/* ======== Footer Styles ======== */

				/**
				* @tab Mobile Styles
				* @section footer text
				* @tip Make the body content text larger in size for better readability on small screens.
				*/
				.footerContent{
					/*@editable*/ font-size:13px !important;
					/*@editable*/ line-height:132% !important;
				}
					
				

				/* Place footer social and utility links on their own lines, for easier access */
			}
		</style>