    <meta content="width=device-width, initial-scale=1" name="viewport">
<head>
    <style type="text/css">
        
        .main{
            width:95%;
            background-color: #ffffff;
            margin: auto;
            overflow: auto;
            font-family:  Arial, Helvetica, sans-serif;
        }
        .container{
            width: 70%;
            background-color: rgb(229, 229, 229);
            margin:auto;
            margin-top: 20px;
            margin-bottom: 30px;
            overflow: auto;
            padding-bottom: 30px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 10px;
            box-sizing: border-box;

        }
        .label{
            text-align: center;
            margin-top: 20px;
        }
        .value{
            width: 50%;
            height: 40px;
            background-color: #ffffff;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            font-size: 25px;
            line-height: 40px;
            border-radius: 5px;
        }
        .result{
            width: 100%;
            //height: 270px;
            background-color: #09357A;
            margin-top: 30px;
            color:#ffffff;
            font-weight: 500;   
            border-radius: 10px;
        }
        .resultpar {
            text-align: center;
            font-size: 50px;
            line-height:60px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);

        }
        .label:not(:first-child) {
            margin-top: 30px
        }
        .header{
            width: 70%;
            margin:auto;
            margin-top: 30px;
            margin-bottom: 20px;
            overflow: auto;
            border-radius: 10px;
            box-sizing: border-box;
        }

        img{
            //max-width: 150px;
            display: block;
            margin:auto;
        }

        @media screen and (max-width: 600px) {
            .container {
                width:100%;
                box-sizing: border-box;
            }
            .header {
                width:100%;
            }
        }
    </style>
</head>
<body>
    <style type="text/css">
        
        .main{
            width:95%;
            background-color: #ffffff;
            margin: auto;
            overflow: auto;
            font-family:  Arial, Helvetica, sans-serif;
        }
        .container{
            width: 70%;
            background-color: rgb(229, 229, 229);
            margin:auto;
            margin-top: 20px;
            margin-bottom: 30px;
            overflow: auto;
            padding-bottom: 30px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 10px;
            box-sizing: border-box;

        }
        .label{
            text-align: center;
            margin-top: 20px;
        }
        .value{
            width: 50%;
            height: 40px;
            background-color: #ffffff;
            margin: auto;
            margin-top: 20px;
            text-align: center;
            font-size: 25px;
            line-height: 40px;
            border-radius: 5px;
        }
        .result{
            width: 100%;
            //height: 270px;
            background-color: #09357A;
            margin-top: 30px;
            color:#ffffff;
            font-weight: 500;   
            border-radius: 10px;
        }
        .resultpar {
            text-align: center;
            font-size: 50px;
            line-height:60px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);

        }
        .label:not(:first-child) {
            margin-top: 30px
        }
        .header{
            width: 70%;
            margin:auto;
            margin-top: 30px;
            margin-bottom: 20px;
            overflow: auto;
            border-radius: 10px;
            box-sizing: border-box;
        }

        img{
           //max-width: 250px;
            display: block;
            margin:auto;
        }

        @media screen and (max-width: 600px) {
            .container {
                width:100%;
                box-sizing: border-box;
            }
            .header {
                width:100%;
            }
        }
    </style>


    <div class="main" style="box-sizing: border-box; width: 100%;background-color: #ffffff;margin: auto;overflow: auto;font-family: Arial, Helvetica, sans-serif;">
        <div class="header" style="width: 100%;margin: auto;margin-top: 30px;margin-bottom: 20px;overflow: auto;border-radius: 10px;box-sizing: border-box;">
            <!--<img src="http://stewart.wedesignuk.co.uk/wp-content/uploads/2019/09/logo.png">-->
            <p style="text-align: center; font-size: 35px; margin-bottom: 0px; margin-top:25px;">Mortgage Calculator</p>
            {{email}}
        </div>
        <div class="container" style="width: 100%;background-color: rgb(229, 229, 229);margin: auto;margin-top: 20px;margin-bottom: 30px;overflow: auto;padding-bottom: 30px;padding-right: 30px;padding-left: 30px;border-radius: 10px;box-sizing: border-box;">

            <p class="label" style="text-align: center;margin-top: 20px;">Home Price:</p>
            <p class="value" style="width: 50%;height: 40px;background-color: #ffffff;margin: auto;margin-top: 20px;text-align: center;font-size: 25px;line-height: 40px;border-radius: 5px;">{{price}}</p>


            <p class="label" style="text-align: center;margin-top: 30px;">Loan Term:</p>
            <p class="value" style="width: 50%;height: 40px;background-color: #ffffff;margin: auto;margin-top: 20px;text-align: center;font-size: 25px;line-height: 40px;border-radius: 5px;">{{loanPeriod}}</p>

            <p class="label" style="text-align: center;margin-top: 30px;">Annual Interest:</p>
            <p class="value" style="width: 50%;height: 40px;background-color: #ffffff;margin: auto;margin-top: 20px;text-align: center;font-size: 25px;line-height: 40px;border-radius: 5px;">{{inter}}</p>

            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%;background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{a1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{a2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{a3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{a4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{a5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{a6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{a7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{a8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{a9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{a10}} Monthly
                </p>
            </div>

            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%;background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{b1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{b2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{b3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{b4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{b5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{b6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{b7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{b8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{b9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{b10}} Monthly
                </p>
            </div>


            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%; background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{c1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{c2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{c3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{c4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{c5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{c6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{c7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{c8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{c9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{c10}} Monthly
                </p>
            </div>


            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%; background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{d1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{d2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{d3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{d4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{d5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{d6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{d7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{d8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{d9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{d10}} Monthly
                </p>
            </div>


            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%; background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{e1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{e2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{e3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{e4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{e5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{e6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{e7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{e8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{e9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{e10}} Monthly
                </p>
            </div>

            <div class="result" style="padding: 5px;box-sizing: border-box;text-align: center;padding-bottom: 10px;width: 100%; background-color: #09357A;margin-top: 30px;color: #ffffff;font-weight: 500;border-radius: 10px;">
                <h3 style="background-color: #FF6306; padding: 10px; border-radius: 15px; display: inline-block;">{{f1}}</h3> 
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Down Payment: $ {{f2}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Points: $ {{f3}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Closing Costs: $ {{f4}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Payment: $ {{f5}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Mortgage Insurance: $ {{f6}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Property Tax: $ {{f7}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">HOA fee: $ {{f8}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 18px;">Homeowner's Insurance: $ {{f9}}
                </p>
                <p style="line-height: 25px; margin-bottom: 10px; text-align: center; font-size: 28px;">$ {{f10}} Monthly
                </p>
            </div>

        </div>

    </div>
</body>