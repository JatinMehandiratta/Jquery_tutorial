var person = [{
    "firstname": "John",
    "lastname": "doe",
    "dob": "21/01/1997"
},
{
    "firstname": "Robert",
    "lastname": "Jane",
    "dob": "31/01/2002"
},
{
    "firstname": "Gilbert",
    "lastname": "Johnson",
    "dob": "22/06/1968"
},
{
    "firstname": "Darlene",
    "lastname": "Kay",
    "dob": "11/11/1938"
},
{
    "firstname": "Darcia",
    "lastname": "Clove",
    "dob": "1/09/1977"
},
{
    "firstname": "Gabreail",
    "lastname": "Roy",
    "dob": "8/12/1999"
},
{
    "firstname": "Davina",
    "lastname": "Kale",
    "dob": "12/05/1955"
},
{
    "firstname": "Kane",
    "lastname": "William",
    "dob": "11/10/2003"
},
{
    "firstname": "Samuel",
    "lastname": "Massi",
    "dob": "10/11/2000"
},
{
    "firstname": "Stellar",
    "lastname": "Luid",
    "dob": "22/12/1968"
},
{
    "firstname": "Bailry",
    "lastname": "Ruth",
    "dob": "29/06/1933"
}
];
for (var i = 0; i < person.length; i++) {
    var tr = "<tr>";
    var td1 = "<td>" + person[i]["firstname"] + "</td>";
    var td2 = "<td>" + person[i]["lastname"] + "</td>";
    var td3 = "<td>" + person[i]["dob"] + "</td></tr>";

    $('#tbody').append(tr + td1 + td2 + td3);
}