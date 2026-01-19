import { checkAuth } from './protected.js';

const user = await checkAuth();

document.getElementById('userName').textContent = user.user_metadata?.name || user.email;
document.getElementById('userEmail').textContent = user.email;