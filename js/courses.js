//display all courses
function loadXML(url) {
		var xmlhttp, course, data, i, txt;
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				txt = "<table><tr><th>Course</th><th>Professor</th><th>Semester</th><th>Coverage</th></tr>";
				course = xmlhttp.responseXML.documentElement.getElementsByTagName("course");
				for(i=0;i<course.length;i++) {
					txt = txt + "<tr>";
					data = course[i].getElementsByTagName("coursename");
						try {
							txt = txt + "<td>" + data[0].firstChild.nodeValue + "</td>";
						}
						catch(er) {
							txt = txt + "<td></td>";
						}
					data = course[i].getElementsByTagName("professor");
						try {
							txt = txt + "<td>" + data[0].firstChild.nodeValue + "</td>";
						}
						catch(er) {
							txt = txt + "<td></td>";
						}

						data = course[i].getElementsByTagName("semester");
						try {
							txt = txt + "<td>" + data[0].firstChild.nodeValue + "</td>";
						}
						catch(er) {
							txt = txt + "<td></td>";
						}

						data = course[i].getElementsByTagName("coverage");
						try {
							txt = txt + "<td>" + data[0].firstChild.nodeValue + "</td>";
						}
						catch(er) {
							txt = txt + "<td></td>";
						}
					txt = txt + "</tr>";
				}
				txt = txt + "</table>";
				document.getElementById("CourseInfo").innerHTML = txt;
			}
		}
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}




//navigate through courses
var i = 0;
displayClass(i);
function displayClass(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            myFunction(xmlhttp, i);
        }
    };
    xmlhttp.open("GET", "../model/courses.xml", true);
    xmlhttp.send();
}

function myFunction(xml, i) {
    var xmlDoc = xml.responseXML;
    x = xmlDoc.getElementsByTagName("course");
    document.getElementById("showClass").innerHTML =
    "<label>Course Name:</label> " +
    x[i].getElementsByTagName("coursename")[0].childNodes[0].nodeValue +
    "<br><label>Professor:</label> " +
    x[i].getElementsByTagName("professor")[0].childNodes[0].nodeValue +
    "<br><label>Semester:</label> " +
    x[i].getElementsByTagName("semester")[0].childNodes[0].nodeValue +
    "<br><label>Coverage:</label> " +
    x[i].getElementsByTagName("coverage")[0].childNodes[0].nodeValue;
}
function next() {
if (i < x.length-1) {
  i++;
  displayClass(i);
  }
}
function previous() {
if (i > 0) {
  i--;
  displayClass(i);
  }
}
