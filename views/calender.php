<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMAK - EPP</title>
  <link rel="shortcut icon" href="../assets/umak-logo.png" type="image/png">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/umak-epp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
  <?php include '../public/navbar.php'; ?>

  <main class="container mx-auto mt-8 p-4">
    <h1 class="text-3xl font-bold mb-6 text-center text-navy-blue">DATES OF EVENTS</h1>
    <p class="text-xl text-center text-yellow-400 mb-8">Select a day to view event scheduled</p>

    <div class="bg-white rounded-lg shadow-md p-6">
      <!-- Calendar component will be added here -->
      <div id="calendar"></div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/api/get-events' // Replace with your actual API endpoint
      });
      calendar.render();
    });
  </script>
</body>
<div class="mt-8">
  <h2 class="text-2xl font-bold mb-4 text-navy-blue">ALL SCHEDULED EVENTS</h2>
  <div class="relative mb-4">
    <input type="text" placeholder="Search event here..." class="w-full p-2 pl-10 pr-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-yellow-400">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
      <i class="fas fa-search text-gray-400"></i>
    </div>
  </div>
  <div class="space-y-4">
    <?php
    // Placeholder data - replace with actual data fetching logic
    $events = [
      ['name' => 'EVENT NAME', 'org' => 'Organization / Office', 'date' => 'September 27, 2024', 'time' => '8:00 AM - 5:00PM'],
      ['name' => 'EVENT NAME', 'org' => 'Organization / Office', 'date' => 'September 27, 2024', 'time' => '8:00 AM - 5:00PM'],
      ['name' => 'EVENT NAME', 'org' => 'Organization / Office', 'date' => 'September 27, 2024', 'time' => '8:00 AM - 5:00PM'],
      ['name' => 'EVENT NAME', 'org' => 'Organization / Office', 'date' => 'September 27, 2024', 'time' => '8:00 AM - 5:00PM'],
    ];

    foreach ($events as $event): ?>
      <div class="bg-navy-blue text-white p-4 rounded-lg">
        <h3 class="text-xl font-bold"><?php echo $event['name']; ?></h3>
        <p class="text-sm"><?php echo $event['org']; ?></p>
        <div class="flex justify-between items-center mt-2">
          <span class="text-yellow-400"><?php echo $event['date']; ?></span>
          <span><?php echo $event['time']; ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

</html>