<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="GET">
        <input id="user_input" type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>

    
    <h1 id="greet"></h1>

    <h1>Users</h1>

<input id="search" type="text" placeholder="Search users...">
<ul id="users"></ul>

<script>
    let allUsers = [];

    async function loadUsers() {
        const response = await fetch("server.php");
        allUsers = await response.json();
        displayUsers(allUsers);
    }

    function displayUsers(users) {
        const list = document.getElementById("users");
        list.innerHTML = "";

        users.forEach(user => {
            const li = document.createElement("li");
            li.textContent = user.name;
            list.appendChild(li);
        });
    }

    document.getElementById("search").addEventListener("input", (event) => {
        const searchValue = event.target.value.toLowerCase();

        const filteredUsers = allUsers.filter(user =>
            user.name.toLowerCase().includes(searchValue)
        );

        displayUsers(filteredUsers);
    });

    loadUsers();
</script>
</body>
</html>