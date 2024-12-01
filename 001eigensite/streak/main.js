let currentDocDate = document.querySelector("#current-day");
let startDocDate = document.querySelector("#first-day");
let streakDocPeriod = document.querySelector("#streak");

let startDate = new Date(2024, 9 ,9); /* watch out, the month in date starts at 0 like counting an array */

let currentDate = new Date();
let stringStartDate = startDate.toLocaleDateString();
let stringCurrentDate = currentDate.toLocaleDateString();


currentDocDate.innerText = stringCurrentDate;
startDocDate.innerText = stringStartDate;
let streakPeriod = Math.floor((currentDate.getTime() - startDate.getTime()) / (1000 * 60 * 60 * 24));
let stringStreakPeriod = streakPeriod.toString();
streakDocPeriod.innerText = stringStreakPeriod;