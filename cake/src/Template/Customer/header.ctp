<!DOCTYPE html>
 <html class="no-js"> 
	<head>

  	

  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">

	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->

	<!-- icons from fontawesome-->

 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
	<!-- dont insert modernizer.js -->
  

	<style type="text/css">
    body{
      font-size: 15px;

    }
		/*placeholder of search field*/
		        input[type="search"]::placeholder {                  
                /* Firefox, Chrome, Opera */                      
                   font-size: 17px; 
                   font-family: Times New Roman;
                   text-align: center;
               }
            input[type="search"]::-webkit-input-placeholder {
                   text-align: center;
                   font-size: 17px; 
                   font-family: Times New Roman;
               }
      
            input[type="search"]:-moz-placeholder { /* Firefox 18- */
                   text-align: center;  
                   font-size: 17px; 
                   font-family: Times New Roman;
                }
      
            input[type="search"]::-moz-placeholder {  /* Firefox 19+ */
                   text-align: center; 
                   font-size: 17px; 
                   font-family: Times New Roman; 
                }
      
           input[type="search"]:-ms-input-placeholder {  
                  text-align: center;
                  font-size: 17px; 
                   font-family: Times New Roman; 
           }
					#top-links{
            font-size: 15px;
            font-family: Times New Roman;

          }
          #sizers{
            font-size: 17px;
          }
 
			
           #signupimg{
           			max-width: 30px;
           			max-height: 30px;
           			margin-bottom: 7px;
           			margin-right: 4px;
           			
           			
           }
           #signuplink{
                color: black;
                position: relative;
           			font-size: 16px;
           			margin-right: 15px;
           			margin-bottom: 15px;
           			font-family: Times New Roman;

           			
           }
           #signup{
           			
           			position: absolute;          			
           			width: 110px;
           			height: 39px;
                top:0%;
           			left:1%
           }
              .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 50px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 8px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 650px;
    caret-color:red;
    padding: 0 10px;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 35px;
    width: 35px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }

.select-style {
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}

          @media screen and (max-width:1100px) {
              .searchbar{
                    padding: 3px;
                    margin-bottom: 1px;
                    height: 39px;
                    background-color: #353b48;
                    border-radius: 30px;
    
              }
              .search_input{
                  color: white;
                  border: 0;
                  outline: 0;
                  background: none;
                  width: 270px;
                  caret-color:red;
                  padding: 0 10px;
                  line-height: 40px;
                  transition: width 0.4s linear;
              }
              .search_icon{

                  height: 33px;
                  width: 33px;
                  float: right;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  border-radius: 50%;
                  color:white;
                  text-decoration:none;
              }
          }
            .link-book{
              color: gray;
              font-size: 17px;
              font-family: Times New Roman;
            }


              #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }



      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }

    #snack_bar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: white; /* For browsers that do not support gradients */
  background-image: linear-gradient(-80deg, gray, white); /* Standard syntax (must be last) */
  color: black;
  text-align: center;
  font-family: Times New Roman;
  border-radius: 28px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 60%;
  bottom: 30px;
  font-size: 17px;
}

#snack_bar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
  
	</style>

	</head>


