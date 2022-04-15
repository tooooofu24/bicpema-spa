let panelButton1;
let panelButton2;
let remortController;
let startButton;
let stopButton;
let resetButton;
let sounds;
let posx = 0;
let posy = 0;
let speed = 0;
let count = 0;
let resetCount;
let clickedCount;
let panelCount;
let fps = 60;
function preload() {
    panelButton1 = loadImage("https://live.staticflickr.com/65535/51564193876_f9b9bcea03_o.png");
    panelButton2 = loadImage("https://live.staticflickr.com/65535/51564881204_9a92af5b7b_o.png");
    remortController = loadImage("https://live.staticflickr.com/65535/51567566194_0d0a427593_o.png");
    startButton = loadImage("https://live.staticflickr.com/65535/51563400792_8950903254_o.png");
    stopButton = loadImage("https://live.staticflickr.com/65535/51563400782_aace81f8ba_o.png");
    resetButton = loadImage("https://live.staticflickr.com/65535/51564881144_0248886998_o.png");
}

function setup() {
    createCanvas(windowWidth, windowHeight);
    rectMode(CENTER);
    panelButton1.resize(width / 9, 0);
    panelButton2.resize(width / 9, 0);
    remortController.resize(width / 6, 0);
    startButton.resize(5 * width / 72, 0);
    stopButton.resize(5 * width / 72, 0);
    resetButton.resize(5 * width / 72, 0);
    frameRate(fps);
    sounds = new Array();
    posx = 50;
    posy = height / 2;
    speed = 340;
    count = 0;
    resetCount = true;
    clickedCount = false;
    panelCount = false;
    textSize(width / 100);
    textAlign(CENTER, CENTER);
}

function draw() {
    backGround();
    panel();
    time_count();
    for (let i = 0; i < sounds.length; i++) {
        sounds[i].calculation();
        sounds[i].display();
    }
    sound_source();
    sound_output();
}

function mousePressed() {
    if (width / (24 * 6) < mouseX && mouseX < startButton.width + width / (24 * 6) && height - startButton.height - width / (24 * 6) < mouseY && mouseY < height - width / (24 * 6)) {
        if (clickedCount == false) {
            clickedCount = true;
            resetCount = false;
        }
        else {
            clickedCount = false;
        }
    }
    if (3 * width / (24 * 6) + startButton.width < mouseX && mouseX < 3 * width / (24 * 6) + startButton.width + resetButton.width && height - resetButton.height - width / (24 * 6) < mouseY && mouseY < height - width / (24 * 6)) {
        posx = 50;
        clickedCount = false;
        resetCount = true;
        count = 0;
        for (let i = 0; i < sounds.length; i++) {
            sounds.length = 0;
        }
    }
    if (0 < mouseX && mouseX < panelButton1.width && 0 < mouseY && mouseY < panelButton1.height) {
        if (panelCount == false) {
            panelCount = true;
        }
        else {
            panelCount = false;
        }
    }
    if (dist(9 * remortController.width / 10, panelButton1.height + 3 * remortController.height / 10, mouseX, mouseY) < remortController.width / 20 && panelCount == true && resetCount == true) {
        speed += 10;
    }
    if (dist(9 * remortController.width / 10, panelButton1.height + 7 * remortController.height / 10, mouseX, mouseY) < remortController.width / 20 && panelCount == true && resetCount == true) {
        if (speed > 0) {
            speed -= 10;
        }
    }
}

function backGround() {
    background(255);
    stroke(0, 100);
    for (let i = 0; i < width - 50; i += 10) {
        if (i % 100 == 0) {
            strokeWeight(2);
        }
        else {
            strokeWeight(1);
        }
        line(i + 50, 0, i + 50, height);
    }
    for (let i = 0; i < height / 2; i += 10) {
        if (i % 100 == 0) {
            strokeWeight(2);
        }
        else {
            strokeWeight(1);
        }
        line(50, height / 2 + i, width, height / 2 + i);
        line(50, height / 2 - i, width, height / 2 - i);
    }
    stroke(0);
}

function sound_source() {
    posx = speed * count / fps + 50;
    fill(0);
    ellipse(posx, posy, 20, 20);
}

function sound_output() {
    if (count % (fps / 10) == 0 && clickedCount == true) {
        sounds.push(new SOUND(posx, 0));
    }
}

function time_count() {
    if (clickedCount == true) {
        count++;
    }
}

function panel() {
    if (panelCount == false) {
        image(panelButton1, 0, 0);
    }
    else {
        image(panelButton2, 0, 0);
        image(remortController, 0, panelButton1.height);
        fill(255);
        text(speed + "m/s", 2 * remortController.width / 5, panelButton1.height, remortController.width / 3, remortController.height);
    }
    if (clickedCount == false) {
        image(startButton, width / (24 * 6), height - startButton.height - width / (24 * 6));
    }
    else {
        image(stopButton, width / (24 * 6), height - startButton.height - width / (24 * 6));
    }
    image(resetButton, 3 * width / (24 * 6) + startButton.width, height - resetButton.height - width / (24 * 6));
}
class SOUND {
    constructor(x, r) {
        this.soundx = x;
        this.radi = r;
    }

    calculation() {
        if (resetCount == true) {
            this.radi = 0;
        }
        if (clickedCount == true) {
            this.radi += 340 / fps;
        }
    }

    display() {
        noFill();
        ellipse(this.soundx, height / 2, this.radi * 2, this.radi * 2);
    }

}
function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}