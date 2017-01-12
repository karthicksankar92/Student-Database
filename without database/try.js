// JavaScript Document
    function configureDropDownLists(course,booktitle) {
        var os = new Array('Distributed System: principles and Paradigms', 'Operating System internals and design principles', 'Operating System Concepts');
        var clientserver = new Array('Andy Harris javascript', 'Advanced Corba Programming with C++', 'Openstack Operation Guide','Balagurusamy Object Oriented guide');
        var se = new Array('Sofware Engineering:A Practitioner Approach', 'Intro to Software Engineering', 'Architecture of Software Engineering');

        switch (course.value) {
            case 'Operating Systems':
                document.getElementById("booktitle").options.length = 0;
                for (i = 0; i < os.length; i++) {
                    createOption(document.getElementById("booktitle"), os[i], os[i]);
                }
                break;
            case 'Client/Server':
                document.getElementById("booktitle").options.length = 0; 
            for (i = 0; i < clientserver.length; i++) {
                createOption(document.getElementById("booktitle"), clientserver[i], clientserver[i]);
                }
                break;
            case 'Software Engineering':
                document.getElementById("booktitle").options.length = 0;
                for (i = 0; i < se.length; i++) {
                    createOption(document.getElementById("booktitle"), se[i], se[i]);
                }
                break;
        }

    }

    function createOption(course, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        course.options.add(opt);
    }