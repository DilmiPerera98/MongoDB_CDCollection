<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xml CD collection</title>
</head>
<body>
        <div class="container"  align="center">


            <div class="card">
                <div class="card-header">
                    <h4  align="left">CD Collection</h4>
                    <div  align="right">
                        <a href="Add.php"><button class="btn btn-primary">Add New User</button></a>
                    </div>

                </div>
                <div class="card-body"   align="center">

                    <div align="center">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">ARTIST</th>
                                    <th scope="col">COUNTRY</th>
                                    <th scope="col">COMPANY</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">YEAR</th>
                                </tr>
                            </thead>
                            <tbody id="viewCotent">
                             
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <script>
            const httpReq  =  new XMLHttpRequest();
            const tableBody= document.getElementById('viewCotent');
            let cdString = '';

            httpReq.onreadystatechange = () =>{
                //console.log(httpReq.readyState);
                //console.log(httpReq.status);
                if(httpReq.readyState == 4 && httpReq.status ==200){
                    
                    //console.log(httpReq.responseText);

                    let cd = httpReq.responseText;
                    parser = new DOMParser();
                    xmlDoc =parser.parseFromString(cd,"text/xml");
                    //console.log(xmlDoc);

                    const newArray = xmlDoc.getElementsByTagName("CD");
                     console.log(newArray);
                    for(i=0; i<newArray.length;  i++){
                        cdString += `<tr>
                                        <td scope="col">${newArray[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue}</td>
                                        <td scope="col">${newArray[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue}</td>
                                        <td scope="col">${newArray[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue}</td>
                                        <td scope="col">${newArray[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue}</td>
                                        <td scope="col">${newArray[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue}</td>
                                        <td scope="col">${newArray[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue}</td>
                                    </tr>`
                    }
                    viewCotent.innerHTML  = cdString;

                }
            }

            httpReq.open("GET","Read.php",true);
            httpReq.send();

        </script>

</body>
</html>
