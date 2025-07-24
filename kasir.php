<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Form User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        header {
            background: #787a78;
            color: #000000;
            padding: 10px 20px;
            text-align: center;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 200px;
            background: #787a78;
            color: #000000;
            padding: 15px;
        }
        .sidebar a {
            color: #000000;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background: #787a78;
            color: white;
        }
        button {
            margin: 5px;
            padding: 10px;
            background-color: #787a78;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1>Kelola Form User</h1>
</header>

<div class="container">
    <div class="sidebar">
        <h2>Admin</h2>
        <a href="#">Kelola User</a>
        <a href="#">Kelola Laporan</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        <h2>Kelola User</h2>
        <form id="userForm">
            <label for="tipeUser">Tipe User:</label>
            <input type="text" id="tipeUser" name="tipeUser"><br><br>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="alamat">alamat:</label>
            <input type="alamat" id="alamat" name="alamat"><br><br>
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon"><br><br>
            <button type="button" onclick="addUser()">Tambah</button>
            <button type="button" onclick="editUser()">Edit</button>
            <button type="button" onclick="deleteUser()">Hapus</button>
        </form>
        <table id="userTable">
            <thead>
                <tr>
                    <th>Id_user</th>
                    <th>Tipe_user</th>
                    <th>Nama_user</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <!-- User data will be populated here -->
            </tbody>
        </table>
    </div>
</div>

<script>
    let users = [];
    let currentUserIndex = -1;

    function addUser() {
        const tipeUser = document.getElementById('tipeUser').value;
        const nama = document.getElementById('nama').value;
        const username = document.getElementById('username').value;
        const alamat = document.getElementById('alamat').value;
        const telepon = document.getElementById('telepon').value;

        if (currentUserIndex === -1) {
            const newUser = { id: users.length + 1, tipeUser, nama, username, alamat, telepon };
            users.push(newUser);
        } else {
            users[currentUserIndex] = { id: currentUserIndex + 1, tipeUser, nama, username, alamat, telepon };
            currentUserIndex = -1;
        }
        renderTable();
        clearForm();
    }

    function editUser() {
        const selectedRow = document.querySelector('tr.selected');
        if (selectedRow) {
            const userId = selectedRow.cells[0].innerText - 1;
            const user = users[userId];
            document.getElementById('tipeUser').value = user.tipeUser;
            document.getElementById('nama').value = user.nama;
            document.getElementById('username').value = user.username;
            document.getElementById('alamat').value = user.alamat;
            document.getElementById('telepon').value = user.telepon;
            currentUserIndex = userId;
        }
    }

    function deleteUser() {
        const selectedRow = document.querySelector('tr.selected');
        if (selectedRow) {
            const userId = selectedRow.cells[0].innerText - 1;
            users.splice(userId, 1);
            renderTable();
            clearForm();
        }
    }

    function renderTable() {
        const tbody = document.getElementById('userTable').getElementsByTagName('tbody')[0];
        tbody.innerHTML = '';
        users.forEach(user => {
            const row = tbody.insertRow();
            row.insertCell(0).innerText = user.id;
            row.insertCell(1).innerText = user.tipeUser;
            row.insertCell(2).innerText = user.nama;
            row.insertCell(3).innerText = user.alamat || '';
            row.insertCell(4).innerText = user.telepon;
            row.onclick = () => {
                const rows = tbody.getElementsByTagName('tr');
                for (let r of rows) {
                    r.classList.remove('selected');
                }
                row.classList.add('selected');
            };
        });
    }

    function clearForm() {
        document.getElementById('userForm').reset();
        currentUserIndex = -1;
    }
</script>

</body>
</html>
