var express = require('express');
var router = express.Router();
var Student = require('../models/student');

/* GET users listing. */
router.post('/add', function(req, res){
	var fullname = req.body.fullname;
	var matric = req.body.matric;
	var faculty = req.body.faculty;
	var department = req.body.department;
	var age = req.body.age;
	var level = req.body.level;
	var cgpa = req.body.cgpa;

	var newStudent = new Student({
		fullname: fullname,
		matric: matric,
		faculty: faculty,
		department: department,
		age: age,
		level: level,
		cgpa: cgpa
	});
	newStudent.save(function (err, student){
		if (err) throw err;
		res.send("Student added");
	});
});

router.post('/:fullname/edit', function(req, res){
	var fullname = req.body.fullname;
	var matric = req.body.matric;
	var faculty = req.body.faculty;
	var department = req.body.department;
	var age = req.body.age;
	var level = req.body.level;
	var cgpa = req.body.cgpa;
	var reqfullname = req.params.fullname;
	Student.getStudentByFullname(reqfullname, function(err, student){
		if (err) throw err;
		student.fullname = fullname || student.fullname;
		student.matric = matric || student.matric;
		student.faculty = faculty || student.faculty;
		student.department = department || student.department;
		student.age = age || student.age;
		student.level = level || student.level;
		student.cgpa = cgpa || student.cgpa;
		student.save(function(err, student) {
			if (err) throw err;
			res.send('Student updated');
		});
	});
});

router.get('/:fullname/show', function(req, res){
	var fullname = req.params.fullname;
	Student.getStudentByFullname(fullname, function(err, student){
		if (err) throw err;
		res.json(student);
	});
});

router.get('/all', function(req, res){
	Student.getAllStudents(function (err, students){
		if (err) throw err;
		res.json(students);
	});
});

router.get('/:fullname/delete', function(req, res){
	var fullname = req.params.fullname;
	Student.getStudentByFullname(fullname, function(err, student){
		if (err) throw err;
		student.remove();
		res.send('Student deleted');
	});
});

module.exports = router;
