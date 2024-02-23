<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class Students extends BaseController
{
    public function store()
    {
        // Load the request helper
        helper('form');

        // Validate the form data
        $validationRules = [
            // Define your validation rules here
            'name' => 'required',
            'email' => 'required|valid_email',
            // Add more validation rules for other fields
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, redirect back to the form with validation errors
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // If validation passes, proceed to save the data

        // Get the form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        // Retrieve other form fields in a similar manner

        // Create an instance of the StudentModel
        $studentModel = new \App\Models\StudentModel();

        // Insert the data into the database
        $data = [
            'name' => $name,
            'email' => $email,
            // Add other form fields to the data array
        ];

        $studentModel->insert($data);

        // Redirect to a success page or back to the form with a success message
        return redirect()->to('/success')->with('success', 'Student application submitted successfully.');
    }
}
