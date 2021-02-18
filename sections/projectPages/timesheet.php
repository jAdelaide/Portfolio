<h4 style="text-align: left; color: rgba(77, 191, 210, 0.85); margin-left: 50px; font-family: candara; font-weight: bold">Employee Timesheet</h4>

<div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(182, 169, 152, 0.15); border-radius: 30px; color: rgb(210, 190, 170)">
    <p style="font-size: 17px; font-family: candara">
    This is a functional timesheet that I made for my current employer using Google Apps Script to add functionality to a Google Sheets spreadsheet. 
    To see a functional version click the image below to open the timesheet, make a copy of the spreadsheet and then refresh the page and a new button should appear to the right of "Help" labeled "JORDAN". 
    Open the menu and upon selecting an option you will get an alert that it needs your permission to run as the script needs to read and write to the sheets. 
    If you want to see the code, once you've made a copy under "Tools" there will be an option labelled "Script editor" where you can see the code I used. 
    </p>
    <br>
    
    <a href="https://docs.google.com/spreadsheets/d/1KLvtX0E5XLsJzfkO9iCKFv_QAl3xg28GB7cfPIQF7Co/edit?usp=sharing" target="_blank">
        <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/Timesheet_joined1.png" alt="Screenshot of the timesheet" title="Open the timesheet in a new tab" height="auto" width="100%">
    </a>
    <br><br>
    
    <h5 style="padding-bottom: 0px; text-align: left; color: rgba(77, 191, 210, 0.8); margin-left: 10px; font-family: candara">Input sheet functions</h5>
    
    <p style="font-size: 17px; font-family: candara">
    There are a number of small rules on the input page that didn't even require GAS to accomplish. 
    Each of the 4 columns have been set to accept different types of data and give different prompts just using the "Data validation" tab under the "Data" item menu in sheets. 
    Using this, I was quickly able to set the week number and hours done columns to only accept a number as an input, and only a number up to 53 for the week number. 
    I was provided the list of activities to start with but was also told to make it so people could add their own items. 
    To do this, I copied the list into the "Summary" sheet and then set the data validation for the "Activity" row in the "Input" sheet to be a list from the range of the first activity on the "Summary" sheet down to row 100. 
    This means the 20 activities in the list were now items in the dropdown list on the "Activity" input column and all anyone had to do to add new items was add the title to the bottom of the list on the "Summary" sheet. 
    Anyone using the spreadsheet can also reorder the activities in the dropdown menu by reordering the list on the "Summary" sheet. 
    <br>
    There is also an indicator of the current week on the "Input" sheet which was just achieved by giving the cell the value =ISOWEEKNUM(NOW()).
    <br><br>
    </p>
</div>