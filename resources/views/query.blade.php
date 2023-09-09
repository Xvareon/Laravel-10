<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style>
        #response {
            white-space: pre-line;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <input type="text" id="userText">
    <button onclick="sendQuery()">Submit</button>
    <div id="response"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if there is a stored value in localStorage
            var storedUserText = localStorage.getItem('userText');
            
            if (storedUserText) {
                document.getElementById('userText').value = storedUserText;
            }
        });

        function sendQuery() {
            var userText = document.getElementById("userText").value;
            localStorage.setItem("userText", userText);

            fetch('/query', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ userText: userText })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById("response").textContent = JSON.stringify(data.processedResponse, null, 2);
            });
        }
    </script>

</body>

</html>