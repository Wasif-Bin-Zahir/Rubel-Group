
// Set the exhibition date (1st October)
const exhibitionDate = new Date("2023-11-30T00:00:00Z");

// Function to update the countdown
function updateCountdown() {
    const now = new Date();
    const timeDifference = exhibitionDate - now;

    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
    const daysf = days+'d';
    const hoursf = hours+'h';
    const minutesf = minutes+'m';
    const secondsf = seconds+'s';
    // Update the countdown display
    document.getElementById("days").textContent = daysf;
    document.getElementById("hours").textContent = hoursf;
    document.getElementById("minutes").textContent = minutesf;
    document.getElementById("seconds").textContent = secondsf;
}

// Update the countdown immediately and then every second
updateCountdown();
setInterval(updateCountdown, 1000);

