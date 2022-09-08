<template>
  <div class="container">
    <div
      class="row d-flex justify-content-center align-items-center"
      style="height: 100vh"
    >
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-success">
            <div class="card-title text-center text-white">Admin Signup</div>
          </div>
          <div class="card-body p-4">
            <div class="alert alert-success text-center" v-if="this.success">
              {{ this.success }}
            </div>
            <form>
              <div class="form-group">
                <label>Name</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="admin.name"
                  placeholder="enter your name"
                />
                <div class="text-danger" v-if="this.nameError">
                  {{ this.nameError }}
                </div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input
                  type="email"
                  class="form-control"
                  v-model="admin.email"
                  placeholder="enter your email"
                />
                <div class="text-danger" v-if="this.emailError">
                  {{ this.emailError }}
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input
                  type="password"
                  class="form-control"
                  v-model="admin.password"
                />
                <div class="text-danger" v-if="this.passwordError">
                  {{ this.passwordError }}
                </div>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  v-model="admin.password_confirmation"
                />
                <div class="text-danger" v-if="this.passwordConfirmError">
                  {{ this.passwordConfirmError }}
                </div>
              </div>
              <div class="form-group">
                <button
                  type="button"
                  class="btn btn-info btn-block"
                  @click="signup"
                >
                  Sign Up
                </button>
              </div>
              <div class="form-group">
                <a :href="this.loginUrl">Already have Account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      admin: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
      loginUrl: "/admin/login",
      success: "",
      nameError: "",
      emailError: "",
      passwordError: "",
      passwordConfirmError: "",
    };
  },
  methods: {
    signup() {
      axios
        .post("/admin/signup/store", this.admin)
        .then((response) => {
          this.success = response.data.success;
        })
        .catch((error) => {
          if (error.response.data.errors.name) {
            this.nameError = error.response.data.errors.name[0];
          } else {
            this.nameError = "";
          }

          if (error.response.data.errors.email) {
            this.emailError = error.response.data.errors.email[0];
          } else {
            this.emailError = "";
          }
          if (error.response.data.errors.password) {
            this.passwordError = error.response.data.errors.password[0];
          } else {
            this.passwordError = "";
          }
          if (error.response.data.errors.password) {
            this.passwordConfirmError =
              error.response.data.errors.password_confirmation[0];
          } else {
            this.passwordConfirmError = "";
          }
        });
    },
  },
};
</script>

<style  scoped>
</style>>
