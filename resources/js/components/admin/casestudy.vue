<template>
  <div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 mt-4">
        <div class="card">
          <div class="card-header bg-success">
            <h4 class="card-title text-white text-center">Create Case Study</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-success" v-if="this.success">
              {{ this.success }}
            </div>
            <form>
              <div class="form-group">
                <label for="company_name">Company Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="company_name"
                  v-model="name"
                />
                <div class="text-danger" v-if="this.nameError">
                  {{ this.nameError }}
                </div>
              </div>
              <div class="form-group">
                <label for="company_image">Company Icon</label>
                <input
                  type="file"
                  class="form-control"
                  id="company_image"
                  @change="uploadfile"
                />
                <div class="text-danger" v-if="this.imageError">
                  {{ this.imageError }}
                </div>
                <p class="my-2 text-center" v-if="this.temp_image_url">
                  <img :src="this.temp_image_url" width="150" height="150" />
                </p>
              </div>
              <div>
                <button
                  type="button"
                  class="btn btn-block btn-info text-white"
                  @click="save"
                >
                  {{ this.is_edititng ? "Update" : "Save" }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-md-8">
        <h4>Case Study Lists</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Comapny Name</th>
              <th>Comapny Icon</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody v-if="lists.length > 0">
            <tr v-for="list in lists" :key="list.id">
              <td>{{ list.com_name }}</td>
              <td>
                <img
                  :src="`http://127.0.0.1:8000/assets/img/case_study/${list.com_image}`"
                  width="100"
                  height="100"
                />
              </td>
              <td>
                <button
                  type="button"
                  class="btn btn-warning"
                  @click="editList(list.id)"
                >
                  Edit</button
                ><button
                  type="button"
                  class="btn btn-danger ml-1"
                  @click="destroyList(list.id)"
                >
                  Delete
                </button>
              </td>
            </tr>
          </tbody>
          <tbody v-else>
            <tr>
              <td colspan="3"><h3 class="text-center">No Case Study</h3></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      lists: [],
      name: "",
      image: "",
      nameError: "",
      imageError: "",
      success: "",
      temporary_id: "",
      is_edititng: false,
      temp_image_url: "",
    };
  },
  methods: {
    fetchAll() {
      axios
        .get("/admin/case-study/get")
        .then((response) => {
          this.lists = response.data;
        })
        .catch((error) => {});
    },
    uploadfile(e) {
      this.image = e.target.files[0];
    },
    save() {
      let url;
      if (this.is_edititng) {
        url = `/admin/case-study/update/`;
      } else {
        url = `/admin/case-study/store`;
      }
      let fd = new FormData();
      fd.append("name", this.name);
      fd.append("image", this.image);
      fd.append("id", this.temporary_id);
      axios
        .post(url, fd)
        .then((response) => {
          this.success = response.data.success;
          this.name = "";
          document.getElementById("company_image").value = "";
          this.temp_image_url = "";
          this.temporary_id = "";
          this.is_edititng = false;
          this.fetchAll();
          setTimeout(function () {
            this.success = "";
          }, 5000);
        })
        .catch((error) => {
          if (error.response.data.errors.name) {
            this.nameError = error.response.data.errors.name[0];
          } else {
            this.nameError = "";
          }

          if (error.response.data.errors.image) {
            this.imageError = error.response.data.errors.image[0];
          } else {
            this.imageError = "";
          }
        });
    },

    editList(list_id) {
      this.is_edititng = true;
      this.temporary_id = list_id;

      axios
        .get(`/admin/case-study/edit/${this.temporary_id}`)
        .then((response) => {
          this.name = response.data.com_name;
          this.temp_image_url = `http://127.0.0.1:8000/assets/img/case_study/${response.data.com_image}`;
        })
        .catch((error) => {});
    },
    destroyList(list_id) {
      axios.get(`/admin/case-study/delete/${list_id}`).then((response) => {
        this.success = response.data.success;
        this.fetchAll();
      });
    },
  },
  mounted() {
    this.fetchAll();
  },
};
</script>
<style scoped>
table tbody tr {
  line-height: 100px;
  text-align: center;
}
</style>
