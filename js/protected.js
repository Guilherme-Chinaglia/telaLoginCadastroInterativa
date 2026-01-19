import { getCurrentUser } from "./auth.js";

export async function checkAuth() {
  const user = await getCurrentUser();
  if (!user) {
    window.location.href = 'index.html';
    return;
  }
  return user;
}