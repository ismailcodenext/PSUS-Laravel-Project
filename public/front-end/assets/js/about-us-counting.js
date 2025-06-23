document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counting_items_heading");
  const duration = 2000; // Total duration for all counters in milliseconds

  const startCounting = (counter) => {
    const target = +counter.getAttribute("data-target");
    const steps = duration / 10; // Total steps for all counters
    const increment = target / steps; // Increment value for each step

    let count = 0; // Initial count starts from 0

    const updateCount = () => {
      count += increment;
      if (count < target) {
        counter.innerText = Math.ceil(count).toLocaleString(); // Update the counter value
      } else {
        counter.innerText = target.toLocaleString(); // Finalize the counter value
        clearInterval(interval); // Stop the interval when finished
      }
    };

    const interval = setInterval(updateCount, 10); // Update every 10ms
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Reset the counter to 0 before starting the counting again
          entry.target.innerText = "0"; // Reset counter to 0
          startCounting(entry.target); // Start counting when the element is visible
        }
      });
    },
    {
      threshold: 0.5, // Trigger the observer when 50% of the element is visible
    }
  );

  counters.forEach((counter) => {
    observer.observe(counter); // Observe each counter
  });
});
