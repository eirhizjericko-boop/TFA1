<h1>Customer Accounts</h1>

<a href="/CI4/myproject/public/">Home</a> |
<a href="/CI4/myproject/public/about">About</a> |
<a href="/CI4/myproject/public/customers">Customers</a> |
<a href="/CI4/myproject/public/users">Users</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['name'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><?= $customer['phone'] ?></td>
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