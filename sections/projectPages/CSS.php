<div class="row">
    <div class="column" style="margin-left: 20%">
            <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/CSSdemo01-min.png" width="270px" class="expandLeft" title="Light theme" alt="View of my blog with edited CSS">
    </div>
    <div class="column">
            <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/CSSdemo02-min.png" width="270px" class="expandCenter" title="Original look" alt="View of the original blog template">
    </div>
    <div class="column">
            <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/CSSdemo03-min.png" width="270px" class="expandRight" title="Dark theme" alt="View of my blog with edited CSS (dark theme)">
    </div>
</div>

<div class="box-container">
    <div style="margin-left: 50px; margin-right: 50px; margin-top: 0px; margin-bottom: 10px; padding-left: 30px; padding-right: 30px; padding-top: 3px; padding-bottom: 10px; background-color: rgba(222, 169, 202, 0.15); border-radius: 50px; color: rgb(210, 190, 170); font-size: 19px; font-family: candara;">
        <p style="position: relative; z-index: 0">
                My first taste of styling a website was just editing the CSS (Cascading Style Sheets) file for the template I'd used for my blog. 
                This file was actually using Sass (Syntactically Awesome Style Sheets), which is just a preprocessor of CSS and adds a bit more style and power.<br>
                <br>As you can see from the images above, the original Jekyll template that I forked from GitHub was pretty plain, pretty much entirely whitespace with grey text and the only color being the blue used for the header and the buttons. 
                To build up my understanding of CSS I edited pretty much every aspect of this other than the font used, starting with just editing the colors of the text in the header. 
                By the time I was done, I'd added images and solid colours to different background elements (including semi-transparent backgrounds behind text); 
                removed the elements in the sidebar and it's style to give it a new shape and colour as well as replacing and resizing the buttons within it, 
                edited the line heights and text size and colour and much more (including edits to how things like pre code are displayed).<br>
                <br>I was surprised with how easy it was to achieve the results I wanted with just some time and using resources like <a href="https://www.w3schools.com/" target="_blank">W3Schools</a> and YouTube channels such as <a href="https://www.youtube.com/user/DesignCourse" target="_blank">DesignCourse</a>. 
                The DesignCourse channel is actually where I learnt how to make the pure CSS <a href="https://www.youtube.com/watch?v=ZKXv_ZHQ654" target="_blank">light/dark mode toggle</a> that I used to enable the high readability mode on my blog (dark theme image on the right).<br>
                <br>
                <br>This website is the next thing I've worked on and, although I have imported a style sheet to go along with the <a href="https://www.youtube.com/watch?v=pWG7ajC_OVo&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o" target="_blank">PHP tutorial series</a> I followed, I have enjoyed exploring it more and adding my own styles and almost see CSS as just part of HTML. 
                I've made tonnes of CSS edits to various elements across this website, and have been able to create my own classes and write some of my own CSS for things like making the 3 image elements above expand when the mouse hovers over them:
        </p>
        <div class="grid-container" style="width: 700px; display: grid; grid-template-columns: 30% 30% 30%; grid-gap: 40px; margin-left: auto; margin-right: auto">
                <div>
                        <p style="width: 230px; padding-left: 15px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px; overflow-y: auto; font-size: 16px; line-height: 20px; background: rgba(200, 200, 200, 0.9); border: 1px solid #777; color: #333; font-family: courier">
                                .expandLeft:hover { <br>
                                position: relative; <br>
                                top: -190px; <br>
                                left: -230px; <br>
                                width: 500px; <br>
                                z-index: 1; <br>
                                }
                        </p>
                </div>
                <div>
                        <p style="width: 230px; padding-left: 15px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px; overflow-y: auto; font-size: 16px; line-height: 20px; background: rgba(200, 200, 200, 0.9); border: 1px solid #777; color: #333; font-family: courier">
                                .expandCenter:hover { <br>
                                position: relative; <br>
                                top: -190px; <br>
                                left: -100px; <br>
                                width: 500px; <br>
                                z-index: 1; <br>
                                } <br>
                        </p>
                </div>
                <div>
                        <p style="width: 230px; padding-left: 15px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px; overflow-y: auto; font-size: 16px; line-height: 20px; background: rgba(200, 200, 200, 0.9); border: 1px solid #777; color: #333; font-family: courier">
                                .expandRight:hover { <br>
                                position: relative; <br>
                                top: -190px; <br>
                                left: 0px; <br>
                                width: 500px; <br>
                                z-index: 1; <br>
                                } <br>
                        </p>
                </div>
        </div>
    </div>
</div>