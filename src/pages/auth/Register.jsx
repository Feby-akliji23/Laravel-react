// src/auth/auth/Register.jsx
import React, { useState } from 'react';
import axios from 'axios';
import { useNavigate } from 'react-router-dom';
import Swal from 'sweetalert2';

const Register = () => {
  const [formData, setFormData] = useState({ name: '', username: '', password: '', email: '' });
  const [loading, setLoading] = useState(false);
  const [errorMessages, setErrorMessages] = useState({});
  const navigate = useNavigate();

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    setLoading(true);
    setErrorMessages({}); // Reset error messages

    try {
      const response = await axios.post('http://127.0.0.1:8000/api/register', formData);

      Swal.fire({
        icon: 'success',
        title: 'Pendaftaran Berhasil!',
        text: 'Akun Anda berhasil dibuat, silakan login.',
      });
      setLoading(false);
      navigate('/login');
    } catch (err) {
      console.error('Error during registration:', err);
      if (err.response?.status === 422) {
        setErrorMessages(err.response.data.errors || {});
      } else {
        setErrorMessages({ general: 'Something went wrong. Please try again later.' });
      }
      setLoading(false);
    }
  };

  return (
    <div className="flex items-center justify-center min-h-screen bg-gray-100">
      <div className="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 className="text-2xl font-bold text-center text-indigo-900 mb-6">Register</h2>
        {errorMessages.general && <p className="text-red-500 text-center mb-4">{errorMessages.general}</p>}
        <form onSubmit={handleSubmit}>
          <input
            type="text"
            name="name"
            placeholder="Full Name"
            value={formData.name}
            onChange={handleChange}
            className="w-full mb-4 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
          />
          {errorMessages.name && <p className="text-red-500 mb-2">{errorMessages.name[0]}</p>}
          <input
            type="text"
            name="username"
            placeholder="Username"
            value={formData.username}
            onChange={handleChange}
            className="w-full mb-4 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
          />
          <input
            type="email"
            name="email"
            placeholder="Email"
            value={formData.email}
            onChange={handleChange}
            className="w-full mb-4 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
          />
          {errorMessages.email && <p className="text-red-500 mb-2">{errorMessages.email[0]}</p>}
          <input
            type="password"
            name="password"
            placeholder="Password"
            value={formData.password}
            onChange={handleChange}
            className="w-full mb-4 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
            required
          />
          {errorMessages.password && <p className="text-red-500 mb-2">{errorMessages.password[0]}</p>}
          <button
            type="submit"
            disabled={loading}
            className={`w-full py-3 rounded-lg text-white ${loading ? 'bg-gray-500' : 'bg-indigo-600 hover:bg-indigo-700'}`}
          >
            {loading ? 'Registering...' : 'Register'}
          </button>
        </form>
        <p className="text-center mt-4">
          Sudah punya akun?{' '}
          <a href="/login" className="text-indigo-600 hover:underline">
            Login
          </a>
        </p>
      </div>
    </div>
  );
};

export default Register;
