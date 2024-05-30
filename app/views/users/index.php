<table>
    <tr>
        <th>Users</th>
    </tr>
    <?php foreach($data['users'] as $user): ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
