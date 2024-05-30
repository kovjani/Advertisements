<table>
    <tr>
        <th>Advertisement</th>
        <th>User</th>
    </tr>
    <?php foreach($data['advertisements'] as $advertisement): ?>
        <tr>
            <td><?php echo $advertisement['title']; ?></td>
            <td><?php echo $advertisement['name']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
