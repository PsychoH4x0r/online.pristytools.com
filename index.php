<!DOCTYPE html>

<html>

<head>

<title>JSO Creator By PsychoH4x0r</title>

<meta name="description" content="JSO Creator" />

<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />

<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">

<style type="text/css">

body {

background-color: #ADD8E6;

color: #FF0000;

font-family: 'Barlow', sans-serif

font-size: 20px;

width: 1000px;

max-width: 1000px;

margin: 0 auto;

border: 1px solid #ccc;

}

textarea {

width: 500px;

height: 150px;

}

</style>

<script>

    function runCharCodeAt() {

        input = document.charCodeAt.input.value;

        output = "";

        for(i=0; i<input.length; ++i) {

            if (output != "") output += ", ";

            output += input.charCodeAt(i);

        }

        document.charCodeAt.output.value = output;

    }

</script>

</head>

<body>

<center>

    <h1>JSO by PsychoH4x0r</h1>

    <form name="charCodeAt" method="post">

        <textarea name="input" placeholder="Paste your deface script here."></textarea><br><br>

        <input type="button" onclick="runCharCodeAt()" value="Convert"><br><br>

        <textarea name="output" placeholder="Results will appear here."></textarea><br><br>

        <input type="submit" name="submit" value="Submit!">

    </form>

    <br><br>

<hr>

&#169;PsychoH4x0r

 </center>

</body>

</html>
