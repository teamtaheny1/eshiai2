<!-- File: templates/Articles/index.php -->

<h1>Events</h1>
<table>
    <tr>
        <th>Event</th>
        <th>Date</th>
        <th>Location</th>
    </tr>


    <?php foreach ($events as $event): ?>
    <tr>
        <td>
            <?= $this->Html->link($event->event_name, ['action' => 'view', $event->slug]) ?>
        </td>
        <td>
            <?= $event->event_location ?>
    </td>
    <td>
            <?= $event->event_date->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>