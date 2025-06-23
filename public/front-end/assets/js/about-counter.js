// JavaScript for synchronized counting animation with "+" icon
const counters = document.querySelectorAll(".number");
const duration = 2000; // Total duration in milliseconds
const frameDuration = 10; // Update interval in milliseconds
const totalFrames = duration / frameDuration;

const animateCounters = () => {
  let frame = 0;

  const interval = setInterval(() => {
    frame++;

    counters.forEach((counter) => {
      const target = +counter.getAttribute("data-target");
      const progress = frame / totalFrames; // Calculate progress as a fraction
      const current = Math.min(Math.ceil(target * progress), target); // Proportional progress
      counter.innerText = current + "+"; // Add "+" icon
    });

    if (frame >= totalFrames) {
      counters.forEach((counter) => {
        const target = +counter.getAttribute("data-target");
        counter.innerText = target + "+"; // Ensure all end at the target
      });
      clearInterval(interval); // Stop animation
    }
  }, frameDuration);
};

animateCounters();
