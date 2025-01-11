import React from 'react';
import { createRoot } from 'react-dom/client'; // Import createRoot
import { Provider } from 'react-redux';
import { PersistGate } from 'redux-persist/integration/react'; // Import PersistGate
import store, { persistor } from './store'; // Import persistor dari store
import App from './App';
import './index.css';

const container = document.getElementById('root'); // Dapatkan elemen root
const root = createRoot(container); // Buat root React

root.render(
  <Provider store={store}>
    <PersistGate loading={null} persistor={persistor}>
      <App />
    </PersistGate>
  </Provider>
);
