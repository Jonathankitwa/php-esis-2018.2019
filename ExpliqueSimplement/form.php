<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  
<form method="post" action="connexionforme.php">
    
    <h1>Expliquesimplement</h1>
    <hr>
    <P>se connecter</p><br/>
    <table>
    <tr>
    <td><label>Pseudo :</label></td> <td><input type="text" name="first_name" /></td>
    </tr>
    <td><label>Mot de passe :</label></td> <td><input type="password" name="password" /></td>
    <tr><td><button type="submit">Envoyer</button></td></tr>
    </table>
</form>

<form method="post" action="validationformulaire.php">
    <p>INSCRIPTION</p><br />
    <table>
    <tr>
    <td>
    <label>Pseudo :</label>
    </td> 
    <td>
    <input type="text" name="pseudo" />
    </td>
    </tr>
    <tr>
    <td><label>Mot de passe : </label></td> <td><input type="password" name="motpasse" /></td>
    </tr>
    <tr>
    <td><label>Email : </label></td> <td><input type="text" name="email" /></td>
    </tr>
    <tr>
    <td>
    <label>sexe : </label>
    </td>
    <td>
    <select name="genre">
        <option value="M">M</option>
        <option value="F">F</option>
    </select><br>
    </td>
    <tr>
    <td>
    <input type="submit" value="Creer" /><br />
    </td>
    </tr>
    </table>
</form>


</body>
</html>