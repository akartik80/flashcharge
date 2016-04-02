#include <bits/stdc++.h>

using namespace std;

struct points {
	pair<int, int> p1;
	pair<int, int> p2;
};

int dist(pair<int, int> &p, pair<int, int> &q) {
	return ((p.first-q.first)*(p.first-q.first) + (p.second-q.second)*(p.second-q.second));
}

struct points closest(vector <pair<int, int> > &v, int l, int r) {
	int i, j, d, dl ,dr, mid, mini = 9999999, mi, k;
	struct points t;
	if ((r - l) <= 3) {
		for (i = l; i < r; i++) {
			for (j = i+1; j < r; j++) {
				d = dist(v[i], v[j]);
				if (d < mini) {
					t.p1 = v[i];
					t.p2 = v[j];
					mini = d;
				}
			}
		}
		return t;
	}

	mid = (l+r)/2;
	struct points a;
	struct points b, ans;
//	cout << l << " " << r << " " << mid << endl;
	a = closest(v, l, mid);
//	cout << a.p1.first << "," << a.p1.second << "   " << a.p2.first << "," << a.p2.second << endl;
	b = closest(v, mid, r);
//	cout << b.p1.first << "," << b.p1.second << "   " << b.p2.first << "," << b.p2.second << endl;
	dl = dist(a.p1, a.p2);
	dr = dist(b.p1, b.p2);
//	cout << dl << "  " << dr << endl;
//	cout << l << " " << r << " " << mid << endl;

	d = min(dl, dr);
	if (dl < dr) {
		ans = a;
	} else {
		ans = b;
	}
//	cout << ans.p1.first << "," << ans.p1.second << "   " << ans.p2.first << "," << ans.p2.second << endl;
	mi = d;
//	cout<< d << endl;
	vector<pair<int, int> > st;
	for (i = l; i < r; i++) {
		k = abs(v[i].first-v[mid].first);
		if (k * k < d) {
			st.push_back(make_pair(v[i].second, v[i].first));
		}
	}

	sort(st.begin(), st.end());

	for (i = 0; i < st.size(); i++) {
		for (j = i+1; j < st.size() && (st[j].first - st[i].first) < mi; j++) {
			if (dist(st[i], st[j]) < mi) {
				mi = dist(st[i], st[j]);
				t.p1 = st[i];
				t.p2 = st[j];
			}
		}
	}

//	mini = min(d, mi);
	if (d <= mi) {
		return ans;
	} else {
		return t;
	}
//	return mini;
}


int main() {
	int n, i, j, x, y, d;
	cin >> n;
	struct points ans;
	vector <pair<int, int> > v;

	for (i = 0; i < n; i++) {
		cin >> x >> y;
		v.push_back(make_pair(x, y));
	}

	sort(v.begin(), v.end());

	ans = closest(v, 0, n);
	cout << "\n" << "Minimum distance = " << sqrt(dist(ans.p1, ans.p2)) << endl;
	cout << "Points : (" << ans.p1.first << "," << ans.p1.second << ") and  (" << ans.p2.first << "," << ans.p2.second << ")\n" << endl;
	return 0;

}
