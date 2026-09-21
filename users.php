<h1>User Accounts</h1>

<a href="/CI4/myproject/public/">Home</a> |
<a href="/CI4/myproject/public/about">About</a> |
<a href="/CI4/myproject/public/customers">Customers</a> |
<a href="/CI4/myproject/public/users">Users</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Username</th>
        <th>Full Name</th>
        <th>Role</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['role'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 32px;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    th, td {
        padding: 10px;
    }
</style>