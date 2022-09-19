<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add CD </title>
</head>
<body>
    <div class="container"  align="center">


        <div class="card">
            <div class="card-header">
                <h2  align="left">Add CD</h2>
                <div  align="right">
                    <a href="index.php"><button class="btn btn-primary">CD  Collection</button></a>
                </div>
            </div>
            <div class="card-body"   align="center">


                    <div class="form-group row">
                        <label for="TITLE" class="col-sm-2 col-form-label">TITLE</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="TITLE" id="TITLE"placeholder="Enter TITLE">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ARTIST" class="col-sm-2 col-form-label">ARTIST</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="ARTIST" placeholder="Enter ARTIST" id="ARTIST" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="COUNTRY" class="col-sm-2 col-form-label">COUNTRY</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="COUNTRY" placeholder="Enter COUNTRY" id="COUNTRY" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="COMPANY" class="col-sm-2 col-form-label">COMPANY</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="COMPANY" placeholder="Enter COMPANY" id="COMPANY" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="PRICE" class="col-sm-2 col-form-label">PRICE</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="PRICE" placeholder="Enter PRICE" id="PRICE" >
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="YEAR" class="col-sm-2 col-form-label">YEAR</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="YEAR" id="YEAR"  placeholder="Enter YEAR">
                        </div>
                    </div>


                    <button  class="btn btn-primary btn-lg" onClick="saveData()">Save</button>

            </div>
        </div>
    </div>
    
    <script>
        const  saveData=() =>{

            const TITLE = document.getElementById("TITLE");
            const ARTIST = document.getElementById("ARTIST");
            const COUNTRY = document.getElementById("COUNTRY");
            const COMPANY = document.getElementById("COMPANY");
            const PRICE = document.getElementById("PRICE");
            const YEAR = document.getElementById("YEAR");

            let param  =`TITLE=${TITLE.value}&ARTIST=${ARTIST.value}&COUNTRY=${COUNTRY.value}&COMPANY=${COMPANY.value}&PRICE=${PRICE.value}&YEAR=${YEAR.value}`;


            const httpReqSave  =  new XMLHttpRequest();

            httpReqSave.onreadystatechange = () =>{

                if(httpReqSave.readyState == 4 && httpReqSave.status ==200){
                    console.log(httpReqSave.readyState);
                    if(httpReqSave.responseText==="Success"){
                        window.alert("New information Saved");
                        TITLE.value = "";
                        ARTIST.value = "";
                        COUNTRY.value = "";
                        COMPANY.value = "";
                        PRICE.value = "";
                        YEAR.value = "";
                    }else{
                        alert("Something went wrong");
                    }

                }

            }

            httpReqSave.open("POST","Save.php",true);
            httpReqSave.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            httpReqSave.send(param);

        }
    </script>

</body>
</html>
