const contactForm = document.querySelector('.needs-validation');
const firstNameNode = document.getElementById('firstName');
const firstNameAlert = document.getElementById('firstNameAlert');
const lastNameNode = document.getElementById('lastName');
const lastNameAlert = document.getElementById('lastNameAlert');
const emailNode = document.getElementById('email');
const emailAlert = document.getElementById('emailAlert');
const messageNode = document.getElementById('message');
const messageAlert = document.getElementById('messageAlert');
const phoneNode = document.getElementById('phone');
const phoneNumberAlert = document.getElementById('phoneAlert');
const submitBtn = document.getElementById('submitBtn');
const userInput = document.getElementsByTagName('input');
const shortMessageAlert = document.getElementById('shortMessageAlert');

// regular expresstions used for verifying inputs
const lettersOnly = /^[A-Za-z]+$/;
const numbersOnly = /^[0-9]+$/;
const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

// validation for contact form
contactForm.addEventListener('submit', function formValidationHandler(event) {
	if (contactForm.checkValidity() === false) {
		event.preventDefault();
		event.stopPropagation();
		submitEventAlertHandler(firstNameNode, firstNameAlert);
		submitEventAlertHandler(lastNameNode, lastNameAlert);
		// submitEventAlertHandler(phoneNode, phoneNumberAlert);
		submitEventAlertHandler(emailNode, emailAlert);
		submitEventAlertHandler(messageNode, messageAlert);
		// clearUserInputHandler(); // feature not currently being utilized.
	}
	contactForm.classList.add('was-validated');
	verifiedInputSubmission();
	// alert('Thank you for your message! I will be in touch as soon as possible.');
});

// valid submissions are no longer editable
verifiedInputSubmission = () => {
	for (let i = 0; i < userInput.length; i++) {
		if (!userInput[i].classList.contains('is-invalid') && userInput[i].value.length > 0) {
			userInput[i].setAttribute('readonly', '');
			userInput[i].style.borderColor = "#28a745";
			// userInput[i].style.backgroundImage = "url('')"";
		} else {
			userInput[i].style.backgroundImage = 'none';
			messageNode.style.backgroundImage = 'none';
		}
	}
};

// handlers alerts for blur events
const focusBlurHandler = (input, alert) => {
	input.addEventListener('blur', function () {
		if (!input.value.length > 0) {
			addInvalidInputAlert(input, alert);
		} else if (emailNode.value.length >= 1 && !emailNode.value.match(emailFormat)) {
			addInvalidInputAlert(emailNode, emailAlert);
		} else if (messageNode.value.length < 50 && messageNode.value.length >= 1) {
			addInvalidInputAlert(messageNode, shortMessageAlert);
		} else {
			removeInvalidInputHandler(emailNode, emailAlert);
			removeInvalidInputHandler(messageNode, shortMessageAlert);
		}
	});
};

focusBlurHandler(firstNameNode, firstNameAlert);
focusBlurHandler(lastNameNode, lastNameAlert);
focusBlurHandler(emailNode, emailAlert);
focusBlurHandler(messageNode, messageAlert);

//enables tooltip on disabled button
// $('#btnToolTip').tooltip('enable')
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
  })

// disables the form submit button and the tooltip  						
const disableSubmitBtnHandler = () => {										
	for (let i = 0; i < userInput.length; i++) {
		if (userInput[i].classList.contains('is-invalid') ||
			messageNode.classList.contains('is-invalid') ||
			userInput[i].value === '' ||
			messageNode.value === ''
		) {
			submitBtn.setAttribute("disabled", true);
		} else {
			submitBtn.disabled = false;
			$('#btnToolTip').tooltip('disable')
			submitBtn.removeAttribute('style');
		}
	}
};

// clears user input from the form when there is an error
// const clearUserInputHandler = () => {
// const userInputTextArea = document.getElementsByTagName('textarea');
// 	for (let i = 0; i < userInput.length; i++) {
// 		if (userInput[i].classList.contains('is-invalid')) {
// 			userInput[i].value = '';
// 		}
// 	}
// 	for (let i = 0; i < userInputTextArea.length; i++) {
// 		if (userInputTextArea[i].classList.contains('is-invalid')) {
// 			userInputTextArea[i].value = '';
// 		}
// 	}
// };

//adds bootstrap class for invalid user input and to show the appropriate alert message
const addInvalidInputAlert = (node, alert) => {
	node.classList.add('is-invalid')
	alert.classList.add('show');
	alert.classList.remove('d-none');
};

// removeds bootstrap class for invalid user input
const removeInvalidInputHandler = (node, alert) => {
	node.classList.remove('is-invalid');
	alert.classList.remove('show');
	alert.classList.add('d-none')
};

// adds only the bootstrap class to show the alert
const submitEventAlertHandler = (node, alert) => {
	if (node.value.trim() === '') {
		alert.classList.add('show');
		alert.classList.remove('d-none');
	} else if (messageNode.value.length < 50) {
		shortMessageAlert.classList.add('show');
		shortMessageAlert.classList.remove('d-none');
	}
};

// if the alert is not closed manually by user this will remove the it.
const alertRemovalHandler = alert => {
	alert.classList.remove('show');
	alert.style.display = 'none';
};

// responds to each input event via switch statements
const contactFormEventHandler = (event) => {

	switch (event) {
		case firstNameNode:
			if (firstNameNode.value.trim() === '' || !firstNameNode.value.match(lettersOnly)) {
				// addInvalidInputHandler(firstNameNode);
				addInvalidInputAlert(firstNameNode, firstNameAlert);
			} else {
				removeInvalidInputHandler(firstNameNode, firstNameAlert);
			}
			break;
		case lastNameNode:
			if (lastNameNode.value.trim() === '' || !lastNameNode.value.match(lettersOnly)) {
				// addInvalidInputHandler(lastNameNode);
				addInvalidInputAlert(lastNameNode, lastNameAlert);
			} else {
				removeInvalidInputHandler(lastNameNode, lastNameAlert);
			}
			break;
		case emailNode:
			if (emailNode.value.trim() === '') {
				// addInvalidInputHandler(emailNode);
				addInvalidInputAlert(emailNode, emailAlert);
			} else {
				removeInvalidInputHandler(emailNode, emailAlert);
			}
			break;
		case phoneNode:																			
			if (isNaN(phoneNode.value)) {           											
				// addInvalidInputHandler(phoneNode);											 
				addInvalidInputAlert(phoneNode, phoneNumberAlert);
			} else {
				removeInvalidInputHandler(phoneNode, phoneNumberAlert);
			}
			break;
		case messageNode:																		
			if (messageNode.value.trim() === '') {												
				// addInvalidInputHandler(messageNode);
				addInvalidInputAlert(messageNode, messageAlert);
				removeInvalidInputHandler(messageNode, shortMessageAlert);
			} else if (messageNode.value.length > 50) {
				removeInvalidInputHandler(messageNode, shortMessageAlert);
			} else {
				removeInvalidInputHandler(messageNode, messageAlert);
			}
		default:
			break;
	}
	disableSubmitBtnHandler();
};

// listens for user input on the contact form
firstNameNode.addEventListener('keyup', contactFormEventHandler.bind(this, firstNameNode));
lastNameNode.addEventListener('keyup', contactFormEventHandler.bind(this, lastNameNode));
emailNode.addEventListener('keyup', contactFormEventHandler.bind(this, emailNode));
phoneNode.addEventListener('keyup', contactFormEventHandler.bind(this, phoneNode));
messageNode.addEventListener('keyup', contactFormEventHandler.bind(this, messageNode));

//navbar scroll styles handler
$(window).scroll(function () {
	if ($(window).scrollTop() > 50) {
		$('.navbar').addClass('bg-dark');
		$('.navbar').addClass('navbar-dark');
		$('.navbar a').css('color','lightgrey');
		$('.navbar').css('padding', '5px 0px');
		$('.navbar a').hover(	
			function () {
			$(this).css({"color":"white"});
			}, 	
			function () {
			$(this).css({"color":"lightgrey"});
			}
	 	);
	} else {
		$('.navbar').css('background','transparent');
		$('.navbar a').css('color','#343a40');
		$('.navbar').removeClass('bg-dark');
		$('.navbar').removeClass('navbar-dark');
		$('.navbar').css('padding', '20px 0px');
		$('.navbar a').hover(	
			function () {
			$(this).css({"color":"#2E3B31"});
			}, 
			function () {
			$(this).css({"color":"#343a40"});
			}
	 	);		 
  	}
});

