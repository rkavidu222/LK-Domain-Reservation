<div id="step1" class="my-4">
  <h2 class="mb-2 text-center text-primary fs-3 fw-semibold">Search .LK Domain</h2><br>

  <input type="text" id="domainInput" class="form-control" placeholder="Enter your domain (e.g. srilanka.lk)" />

  <div class="price-info text-center mt-2">
    <del>Rs. 5000/=</del>
    <span class="text-danger fw-bold">Now Rs. 4600/=</span>
  </div>

  <button class="btn btn-primary w-100 mt-3" onclick="searchDomain()">Search</button>

  <!-- Result Section -->
  <div id="searchResult" class="alert d-none mt-3 d-flex justify-content-between align-items-center" style="background-color: #dbe9ff; padding: 6px 12px; line-height: 1.2;">
    <span id="domainName" class="fw-semibold" style="color: #333;"></span>
    <button class="btn btn-success btn-sm" onclick="goToStep(2)" style="padding: 0.25rem 0.5rem; font-size: 0.8rem;">Reserve</button>
  </div>
</div>

<script>
  function searchDomain() {
    const input = document.getElementById('domainInput').value.trim();
    const resultDiv = document.getElementById('searchResult');
    const domainNameSpan = document.getElementById('domainName');

    if (input === '') {
      alert("Please enter a domain name.");
      return;
    }

    // Mock domain check - replace with real AJAX or API call
    const isAvailable = true; // Always "available" for this example

    if (isAvailable) {
      domainNameSpan.textContent = input + " is available";
      resultDiv.classList.remove('d-none');
      resultDiv.classList.add('d-flex');
    } else {
      domainNameSpan.textContent = input + " is not available";
      resultDiv.classList.remove('d-none');
      resultDiv.classList.add('d-flex');
    }
  }

  function goToStep(stepNumber) {
     window.location.href = '/domain-category';
  }


</script>
