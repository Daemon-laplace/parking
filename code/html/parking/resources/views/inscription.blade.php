@extends('layouts.app')

@section('content')

<fieldset>
    <legend>Formulaire d'inscription</legend>
    <!-- La balise Table pour formater l'affichage du formulaire -->
    <table>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" placeholder="saisir votre nom"/> </td>
        </tr>
        <tr>
            <td><label>Prenom</label></td>
            <td><input type="text" placeholder="saisir votre prenom"/></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="email" placeholder="saisir votre Email"/></td>
        </tr>
        <tr>
            <td>Sexe</td>
            <!-- Les deux inputs radio doivent avoir le meme nom -->
            <td>
                Masculin <input type="radio" name="sexe" value="M" checked="checked">
                Féminin <input type="radio" name="sexe" value="F">
            </td>
        </tr>
        <tr>
            <!-- Pour réstreindre le type des fichiers on utilise l'attribut "accept" -->
            <td><label>Photo</label></td>
            <td><input type="file" accept="image/jpeg,image/png"></td>
        </tr>
        <tr>
            <td><label>Pays</label></td>
            <td>
                <select>
                <option>France</option>
                <option>Espagne</option>
                <option>Italie</option>
            </select>
        </td>
        </tr>
        <tr>
            <!-- l'utilisation l'attribut multiple permet le choix de plusieurs valeurs des options -->
            <td>Les langages préferés </td>
            <td><select multiple="multiple">
                <option>Java</option>
                <option>C</option>
                <option>C++</option>
                <option>PHP</option>
                <option>HTML</option>
            </select>   (Pour faire plusieurs choix maintenir la touche CTRL enfoncée)</td>
        </tr>
        
        <tr>
            <td><label>Domaines d'actvités</label></td>
            <td><input type="checkbox" > Informatique <input type="checkbox" > Gestion <input type="checkbox" > Pédagogie</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Envoyer"/>  <input type="reset" value="Annuler"/></td>
        </tr>
    </table>
</fieldset>
//Source : www.exelib.net

@endsection