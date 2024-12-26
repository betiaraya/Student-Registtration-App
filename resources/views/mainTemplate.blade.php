<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Assignment</title>
        </head>
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Helvetica Neue', Arial, sans-serif;

            }
            body {
                background-image: url("image9.jpg"); 
                background-repeat: no-repeat;
                background-size: cover; 
                /* background: lightseagreen; */
                height: 100vh;
                 display: flex;
                justify-content: center;
                align-items: center;
                /* margin: 1% 50%; */
            }
            .header {
                display : flex;
                justify-content: center;
            }
            center {
                width: 300px;
                height: 500px;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8));
                display: flex;
                flex-direction: column;
                padding: 20px 20px;
                }
            center h1 {
                color: white;
            }
                 .boxes {
                        flex: 1;
                        text-align: center;
                        /* border-bottom: 2px solid rgba(255,255,255,0.5); */
                        display: flex;
                        align-items: flex-end;
                        /* justify-content: center; */
                        padding-bottom: 10px;
                        color: rgba(255,255,255,0.5);
                        text-transform: capitalize;
                        font-size : 18px;
                        color :white;
                    
            
                    }
                    label {
                        color :"#fff";
                        font-weight: bold;
                        
                    }
                 
                    .button-container {
                             border-bottom: none;

                        }
                    input {
                        background-color: #222;
                        border: none;
                        border-radius: 0;
                        padding: 0.75rem 1rem;
                        color: #fff;
                        margin-bottom: 0.5rem;
                        width: 100%;
                    }
                    input::placeholder {
                        color: #ccc;
                        font-weight: bold;
                    }

                    input:focus {
                        box-shadow: none;

                    }

                    .button-container button {
                        /* padding: 2px 35px;
                        text-transform: capitalize;
                        border-radius: 17px;
                        border: none;
                        outline: none; */
                        background-color: #e50914;
                        border: none;
                        border-radius: 0;
                        padding: 0.75rem 1rem;
                        font-weight: bold;
                        width: 114%;
                        font-size: 18px;
                        color: white;

                    }

                    button:hover {
                         /* background: transparent; */
                         background : blue;
                    }
        </style>
        <body>
            <div class="header">
                <!-- <h1 class="header">STUDENT MANAGEMENT SYSTEM </h1> -->
            </div>

            @yield('otherContent')

        </body>
</html>