<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Lokka GraphQL Client</title>
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="jslibs.js"></script>
</head>
<body>
<div id="root"></div>
<script type="text/babel">
    const libs = window.jslibs;
    const Lokka = libs['lokka'].Lokka;
    const Transport = libs['lokka-transport-http'].Transport;

    const client = new Lokka({
        transport: new Transport('/graphql.php')
    });
    client.query(`{
    conferences {
      id
      name
    }
  }`).then(response => {
        console.log(response);
    });
</script>

</body>
</html>