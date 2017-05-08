<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style type="text/css">
            textarea {
                width: 500px;
                height: 100px;
            }

            textarea[name="results"] {
                height: 300px;
            }
        </style>

        <h1>Rest API Demo</h1>

        Verb/HTTP Method:<br />
        <select name="verb">
            <option value="GET">GET</option>
            <option value="POST">POST</option>
            <option value="PUT">PUT</option>
            <option value="DELETE">DELETE</option>
            <option value ="GETALL">GET ALL</option>
            
        </select>
        <br />
        <br />
        Resource for endpoint:<br />
        <input name="resource" value="corp" />
        <br />
        <br />
        Data(optional):<br />   
        corp <input type="text" name="corp" value="" />
        <br />
        incorp date <input type="date" name="incorp_dt">
        <br />
        email <input type="email" name="email" value="" />
        <br />
        Owner <input type="text" name="owner" value="" />
        <br />
       
        phone <input type="number" pattern="[0-9]*" maxlength="12" min="0" name="phone">
        <br />
        location <input type="text" name="location">
        <br />
        
        <br />
        <button>Make Call</button>
        <h3>Results</h3>

        <textarea name="results"></textarea>

        <script type="text/javascript">

            document.querySelector('button').addEventListener('click', makeCall);

            function makeCall() {
                var verbfield = document.querySelector('select[name="verb"]');
                var verb = verbfield.options[verbfield.selectedIndex].value;
                var resource = document.querySelector('input[name="resource"]').value;
                var data = {
                    'corp': document.querySelector('input[name="corp"]').value,
                    'email': document.querySelector('input[name="email"]').value,
                    'incorp_dt': document.querySelector('input[name="incorp_dt"]').value,
                    'location': document.querySelector('input[name="location"]').value,
                    'owner': document.querySelector('input[name="owner"]').value,
                    'phone': document.querySelector('input[name="phone"]').value,
                };
                var results = document.querySelector('textarea[name="results"]');

                var httpRequest = new XMLHttpRequest();

                var url = './api/v1/' + resource;

                httpRequest.open(verb, url, true);
                httpRequest.addEventListener('readystatechange', callComplete);

                function callComplete() {
                    if (this.readyState === XMLHttpRequest.DONE) {
                        console.log(this.responseText);
                        results.value = this.responseText;
                    } // else waiting for the call to complete
                }

                if (verb === 'GET') {
                    httpRequest.send(null);
                } else {
                    httpRequest.setRequestHeader('Content-type', 'application/json;charset=UTF-8');
                    httpRequest.send(JSON.stringify(data));
                }
            }
        </script>




        

    </body>
</html>
