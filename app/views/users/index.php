<div class="flex">
    <table>
        <tr>
            <th>Users</th>
        </tr>
        <?php foreach($data['users'] as $user): ?>
            <tr>
                <td class="td_user"><?php echo $user['name']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
