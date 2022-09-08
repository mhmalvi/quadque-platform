<template>
  <div class="container">
    <div
      class="row d-flex justify-content-center align-items-center"
      style="height: 100vh"
    >
      <div class="col-md-5">
        <div class="card">
          <div class="card-header bg-success">
            <div class="card-title text-center text-white">Admin Login</div>
          </div>
          <div class="card-body">
            <div class="alert alert-danger text-center" v-if="this.fail">
              {{ this.fail }}
            </div>
            <form autocomplete="on">
              <div class="form-group">
                <label>Email</label>
                <input
                  type="email"
                  class="form-control"
                  v-model="admin.email"
                  placeholder=""
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
                <button
                  type="button"
                  class="btn btn-info btn-block"
                  @click="login"
                >
                  Login
                </button>
              </div>
              <div class="from-group d-flex justify-content-between">
                <a href="#" class="text-left">Forget Password</a>
                <a :href="signupUrl" class="text-left">Sign Up</a>
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
        email: "",
        password: "",
      },
      fail: "",
      emailError: "",
      passwordError: "",
      signupUrl: "/admin/signup",
    };
  },
  methods: {
    login() {
      axios
        .post("/admin/login/check", this.admin)
        .then((response) => {
          if (response.data.fail) {
            this.fail = response.data.fail;
          }
          if (response.data.success) {
            location.href = response.data.success;
          }
        })
        .catch((error) => {
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
        });
    },
  },
};
</script>

<style  scoped>
</style>>
